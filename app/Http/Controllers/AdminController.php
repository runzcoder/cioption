<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Deposit;
use App\Models\InvestmentType;
use App\Models\PayOption;
use App\Models\Setting;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth", "admin"]);
    }

    public function index()
    {
        $users = User::paginate(10);
        return view("admin.users")->with("users", $users);
    }

    public function payOption()
    {
        $pay_option = PayOption::all();
        $currencies = Currency::where("active", "yes")->get();
        return view("admin.payoption")->with("pay_option", $pay_option)->with("currencies", $currencies);
    }

    public function currency()
    {
        $currencies = Currency::all();
        return view("admin.currency")->with("currencies", $currencies);;
    }

    public function addCurrency(Request $request)
    {
        $request->validate([
            "name" => "required",
            "symbol" => "required",
            "image" => "required",
            "type" => "required"
        ]);

        try {
            $new_currency = Currency::create($request->all());
        } catch (\Throwable $th) {
            Session::flash("failed", $th->getMessage());
            return redirect()->back();
        }
        Session::flash("success", "New currency added successfully");
        return redirect()->back();
    }

    public function deleteCurrency($id)
    {
        try {
            $currency =  Currency::find($id);

            $currency->update([
                "active" => $currency->active == "yes" ? "no" : "yes"
            ]);
        } catch (\Throwable $th) {
            Session::flash("failed", $th->getMessage());
            return redirect()->back();
        }
        Session::flash("success", "Currency deleted successfully");
        return redirect()->back();
    }


    ////////////////Payment options

    public function addPayOption(Request $request)
    {
        $request->validate([
            "currencies" => "required",
            "wallet_address" => "required",
            "type" => "required"

        ]);

        try {
            $new_currency = PayOption::create($request->all());
        } catch (\Throwable $th) {
            Session::flash("failed", $th->getMessage());
            return redirect()->back();
        }
        Session::flash("success", "New payment option added successfully");
        return redirect()->back();
    }

    public function deletePayOption($id)
    {
        try {
            PayOption::destroy($id);
        } catch (\Throwable $th) {
            Session::flash("failed", $th->getMessage());
            return redirect()->back();
        }
        Session::flash("success", "Pay option deleted successfully");
        return redirect()->back();
    }


    //////// Investment types
    public function investmentType()
    {
        $investment_types = InvestmentType::all();
        return view("admin.investment_type")->with("investment_types", $investment_types);
    }

    public function addInvestmentType(Request $request)
    {
        $request->validate([
            "package" => "required",
            "duration" => "required",
            "roi" => "required",
            "min" => "required",
            "max" => "required",
            "cover_image_url" => "required"
        ]);

        try {
            $new_invest_type = InvestmentType::create($request->all());
        } catch (\Throwable $th) {
            Session::flash("failed", $th->getMessage());
            return redirect()->back();
        }
        Session::flash("success", "New investment type created successfully");
        return redirect()->back();
    }

    public function disableInvestmentType($id)
    {
        try {
            $new_invest_type =  InvestmentType::find($id);

            $new_invest_type->update([
                "active" => $new_invest_type->active == "yes" ? "no" : "yes"
            ]);
        } catch (\Throwable $th) {
            Session::flash("failed", $th->getMessage());
            return redirect()->back();
        }
        Session::flash("success", "Investment Type disabled successfully");
        return redirect()->back();
    }

    /////Users

    public function users()
    {
        $users = User::paginate(10);
        return view("admin.users")->with("users", $users);
    }

    public function searchUsers(Request $request)
    {
          $request->validate([
            "search_text" => "required"
          ]);

            $users = User::where('name','like','%'.$request->search_text.'%')
            ->orWhere('email','like','%'.$request->search_text.'%')
            ->orWhere('username','like','%'.$request->search_text.'%')
            ->paginate(10);
            return view("admin.users")->with("users", $users);

    }

    public function changeRole(Request $request)
    {
        $request->validate(
            [
                "user_id" => "required",
                "level" => "required"
            ]
            );

        $user = User::find($request->user_id);
        if ($user)
        {
            $user->level = $request->level;
            $user->save();
            return redirect()->back()->with("success", "User level updated");
        }
        return redirect()->back()->with("failed", "User not found updated");
    }

    public function addBalance(Request $request)
    {
        $request->validate(
            [
                "user_id" => "required",
                "amount" => "required"
            ]
            );
        if ($request->amount <= 0)
        {
            return redirect()->back()->with("failed", "Enter a valid amount");
        }

        $user = User::find($request->user_id);
        if ($user)
        {
            BalanceController::updateBalance($user->id, "reward", $request->amount, "", "Bonus");
            return redirect()->back()->with("success", "User balance updated");
        }
        return redirect()->back()->with("failed", "User not found updated");
        
    }

    //// DEPOSITS

    public function deposits()
    {
        $deposits = Deposit::orderBy("id", "desc")->paginate(10);
        return view("admin.deposits")->with("deposits", $deposits);
    }

    public function viewDeposits($id)
    {
        $deposit = Deposit::find($id);
        $user = User::find($deposit->user_id);
        return view("admin.view_deposit")->with("deposit", $deposit)->with("user", $user);
    }

    public static function approveDeposit($id)
    {
        $deposit = Deposit::where("id", $id)->where("status", "pending")->get();

        if (count($deposit) > 0) {
            $deposit = $deposit[0];
            $user = User::find($deposit->user_id);
            if ($user) {
                if (BalanceController::updateBalance($user->id, "funding", $deposit->amount, $deposit->payOption->currency->name, "Funding")) {
                    $depo = Deposit::find($deposit->id);
                    $depo->status = "approved";
                    $depo->approved_by = Auth::user()->id;
                    $depo->save();
                    return redirect()->back()->with("success", "Account credited");
                }
            }
        }

        return redirect()->back()->with("failed", "Deposit record not found");
    }

    public function declineDeposit($id)
    {
        $deposit = Deposit::find($id);
        if ($deposit && $deposit->status == "pending") {
            $deposit->status = "declined";
            $deposit->save();
            return redirect()->back()->with("success", "Deposit Declined");
        }

        return redirect()->back()->with("failed", "Record not found");
    }

    
     //// Withdrawals

     public function withdrawals()
     {
         $withdrawals = Withdrawal::orderBy("id", "desc")->where('status', 'not like', '%cancelled%')->paginate(10);
         return view("admin.withdrawals")->with("withdrawals", $withdrawals);
     }
 
     public function viewWithdrawals($id)
     {
         $withdrawal = Withdrawal::find($id);
         $user = User::find($withdrawal->user_id);
         return view("admin.view_withdrawal")->with("withdrawal", $withdrawal)->with("user", $user);
     }
 
     public static function approveWithdrawal($id)
     {
         $withdrawal = Withdrawal::where("id", $id)->where("status", "pending")->get();
 
         if (count($withdrawal) > 0) {
             $withdrawal = $withdrawal[0];
             $user = User::find($withdrawal->user_id);
             if ($user) {
                 if (BalanceController::updateBalance($user->id, "withdrawal", $withdrawal->amount, $withdrawal->currency->name, "Withdrawal")) {
                     $_width = Withdrawal::find($withdrawal->id);
                     $_width->status = "approved";
                     $_width->approved_by = Auth::user()->id;
                     $_width->save();
                     return redirect()->back()->with("success", "Withdrawal approved. Ensure you send the coin to the user immediately");
                 }
             }
         }
 
         return redirect()->back()->with("failed", "Withdrawal record not found");
     }
 
     public function declineWithdrawal($id)
     {
        //  $deposit = Deposit::find($id);
        //  if ($deposit && $deposit->status == "pending") {
        //      $deposit->status = "declined";
        //      $deposit->save();
        //      return redirect()->back()->with("success", "Deposit Declined");
        //  }
 
        //  return redirect()->back()->with("failed", "Record not found");
     }
 
     

    //Settings

    public function settings()
    {
        return view("admin.settings");
    }

    public function createSetting(Request $request)
    {
        $request->validate([
            "name" => "required",
            "value" => "required"
        ]);

        Setting::create($request->all());
        return redirect()->back()->with("success", "Settings added");
    }

    public function editSetting(Request $request)
    {
        $request->validate([
            "id" => "required",
            "name" => "required",
            "value" => "required"
        ]);
        $setting = Setting::find($request->id);
        if ($setting) {
            $setting->name = $request->name;
            $setting->value = $request->value;
            $setting->save();
            return redirect()->back()->with("success", "Settings added");
        }
        return redirect()->back()->with("failed", "Settings  not found");
    }

    public function deleteSetting(Request $request)
    {
        $request->validate([
            "id" => "required"
        ]);
        Setting::destroy($request->id);
        return redirect()->back()->with("success", "Settings deleted");
    }
}
