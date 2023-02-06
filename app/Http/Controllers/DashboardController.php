<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Deposit;
use App\Models\Investment;
use App\Models\InvestmentType;
use App\Models\PayOption;
use App\Models\Referral;
use App\Models\Setting;
use App\Models\TransactionHistory;
use App\Models\Withdrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth"]);
    }

    public function depositView()
    {
        $pay_options = PayOption::where("active", "yes")->get();
        $deposits = Deposit::orderBy("id", "desc")->paginate(10);
        return view("pages.deposit")->with("pay_options", $pay_options)->with("deposits", $deposits);
    }
    public function submitDeposit(Request $request)
    {
        $request->validate([
            "amount" => "required",
            "pay_options_id" => "required",
            "dollar_rate" => "required"
        ]);


        $despit =  Deposit::create([
            "amount" => $request->amount,
            "pay_options_id" => $request->pay_options_id,
            "dollar_rate" => $request->dollar_rate,
            "user_id" => Auth::user()->id
        ]);
        return  redirect("/dashboard/deposit_confirm/" . $despit->id)->with("success", "Deposit created");
    }

    public function getPayOptions()
    {
        return [PayOption::where("active", "yes")->get(), Currency::all()];
    }

    public function depositConfirm($id, $only_data = "off")
    {

        $deposit = Deposit::where("id", $id)->where("user_id", Auth::user()->id)->get();
        if (count($deposit) > 0) {
            $deposit = $deposit[0];
            $pay_options = PayOption::find($deposit->pay_options_id);

            return $only_data == "yes" ?
                [$deposit, $pay_options, $pay_options->currency]
                :
                view("pages.deposit_confirm")->with("deposit", $deposit);
        }

        return redirect()->back()->with("failed", "Not found");
    }

    public function uploadProof(Request $request)
    {
        $request->validate([
            "id" => "required",
            "payment_proof" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->id . "." . $request->payment_proof->getClientOriginalExtension();
        $path = $request->file('payment_proof')->storePubliclyAs("public/payment_proofs", $file);
        $deposit = Deposit::find($request->id);
        $deposit->payment_proof = $file;
        $deposit->save();
        return redirect()->back()->with("success", "Uploaded");
    }

    public function cancelDeposit($id)
    {
        $deposit = Deposit::find($id);
        if ($deposit && $deposit->status == "pending" && $deposit->user_id == Auth::user()->id) {
            $deposit->status = "cancelled";
            $deposit->save();
            return redirect()->back()->with("success", "Deposit Cancelled");
        }

        return redirect()->back()->with("failed", "Record not found");
    }

    public function createInvestment($id = null)
    {
        $investmentTypes = InvestmentType::where("active", "yes")->get();
        if (count($investmentTypes) > 0) {
            if ($id == null) {
                $selectedType = $investmentTypes[0];
            } else {
                $selectedType = InvestmentType::find($id);
            }

            return view("pages.create_investment")->with("investmentTypes", $investmentTypes)
                ->with("selectedType", $selectedType);
        }

        return redirect()->back()->with("failed", "Investment packages not available");
    }

    public function saveInvestment(Request $request)
    {
        $request->validate([
            "investment_type_id" => "required",
            "amount" => "required"
        ]);

        if (Auth::user()->balance < $request->amount)
        {
            return redirect()->back()->with("failed", "Insufficient amount");
        }
        $investment_type = InvestmentType::find($request->investment_type_id);

        if ($investment_type) {
            DB::transaction(function () use ($request, $investment_type) {
                $investment = Investment::create(
                    [
                        "user_id" => Auth::user()->id,
                        "investment_type_id" => $request->investment_type_id,
                        "amount" => $request->amount,
                        "next_due_date" => InvestmentController::getNextDueDate($investment_type->duration)
                    ]
                );

                BalanceController::updateBalance(Auth::user()->id, "invest", $request->amount, null, "Investment");
            });
            return redirect("dashboard")->with("success", "Investment created");
        }
        return redirect()->back()->with("failed", "Invalid investment type");
    }

    public function cancelInvestment(Request $request)
    {
        $request->validate([
            "id" => "required"
        ]);

        $item = Investment::find($request->id);
        DB::transaction(function () use ($item, $request) {
            if ($item && $item->status == "running" && $item->user_id == Auth::user()->id) {
                $item->status = "cancelled";
                $item->save();
                BalanceController::updateBalance(Auth::user()->id, "funding", $item->amount, null, "Cancelled investment");
                return redirect()->back()->with("success", "Investment cancelled");
            }
        });

        return redirect()->back()->with("failed", "Investment not found");
    }

    public function profits()
    {
        $profits = TransactionHistory::orderBy("id", "desc")->where("user_id", Auth::user()->id)->where("type", "profit")->paginate(5);
        return view("pages.profits")->with("profits", $profits);
    }

    public function trx()
    {
        $trx = TransactionHistory::orderBy("id", "desc")->where("user_id", Auth::user()->id)->paginate(10);
        return view("pages.trx")->with("trx", $trx);
    }

    public function plans()
    {
        return view("pages.plans");
    }

    public function referrals()
    {
        $referrals = Referral::orderBy("id", "desc")->where("referred_by", Auth::user()->username)->paginate(10);
        return view("pages.referrals")->with("referrals", $referrals);
    }

    public function clemReward($id)
    {
        
        $referral = Referral::find($id);
        if ($referral 
            && $referral->referred_by == Auth::user()->username 
            && $referral->rewarded == "no")
            {
                $referral->rewarded = "yes";
                $referral->save();

                BalanceController::updateBalance(Auth::user()->id, "reward", SettingsController::getSetting("referral_bonus"),"","Referral bonus");
                return redirect("dashboard/referrals")->with("success", "You have been rewarded with $".SettingsController::getSetting("referral_bonus")." Referral bonus");

            }
        return redirect("dashboard/referrals")->with("failed", "Not found");
    }


    public function withdrawal()
    {
        return view("pages.withdrawal");
    }

    public function saveWithdrawal(Request $request)
    {
        $request->validate([
            "amount" => "required",
            "currency_id" => "required",
            "accno_address" => "required",
            "bank_network" => "required",
            "rate" => "required"
        ]);

        if (Auth::user()->balance < $request->amount)
        {
                return redirect()->back()->with("failed", "Insufficient balance");
        }

        DB::transaction(function()use($request){
            $withdrawal = Withdrawal::create([
                "user_id" => Auth::user()->id,
                "rate" => $request->rate,
                "amount" => $request->amount,
                "currency_id" => $request->currency_id,
                "accno_address" => $request->accno_address,
                "bank_network" => $request->bank_network,
                "account_name" => $request->account_name || ""
            ]);

            BalanceController::updateBalance(Auth::user()->id, "withdrawal", $request->amount, "", "Withdrawal");

        });

        return redirect()->back()->with("success", "Withdrawal request successfull");

        
    }

    public function cancelWithdrawal($id)
    {
        $withdrawal = Withdrawal::find($id);
        if ($withdrawal && $withdrawal->status == "pending" && $withdrawal->user_id == Auth::user()->id) {
            $withdrawal->status = "cancelled";
            BalanceController::updateBalance(Auth::user()->id, "funding", $withdrawal->amount, "", "Cancelled withdrawal");
            $withdrawal->save();
            return redirect()->back()->with("success", "Deposit Cancelled");
        }

        return redirect()->back()->with("failed", "Record not found");
    }
}
