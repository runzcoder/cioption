<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Deposit;
use App\Models\Investment;
use App\Models\InvestmentType;
use App\Models\PayOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if($deposit && $deposit->status == "pending" && $deposit->user_id == Auth::user()->id)
        {
            $deposit->status = "cancelled";
            $deposit->save();
            return redirect()->back()->with("success", "Deposit Cancelled");
        }
        
        return redirect()->back()->with("failed", "Record not found");
    }

    public function createInvestment($id=null)
    {
        $investmentType = InvestmentType::where("active", "yes")->get();
       if (count($investmentType) > 0)
       {
        if ($id == null){
            $selectedType = $investmentType[0];
        }
        else {
            $selectedType = InvestmentType::find($id);
        }

        return view("pages.create_investment")->with("investmentTypes", $investmentType)
                                            ->with("selectedType", $selectedType);
       }

       return redirect()->back()->with("failed", "Investment packages not available");
    }
}
