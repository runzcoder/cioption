<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\InvestmentType;
use App\Models\PayOption;
use App\Models\User;
use Illuminate\Http\Request;
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
    public function investmentType(){
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

    public function users(){
        $users = User::paginate(10);
        return view("admin.users")->with("users", $users);
    }
}
