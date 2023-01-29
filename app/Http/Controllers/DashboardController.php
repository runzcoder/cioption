<?php

namespace App\Http\Controllers;

use App\Models\PayOption;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function depositView()
    {
        $pay_options = PayOption::where("active", "yes")->get();
        return view("pages.deposit")->with("pay_options", $pay_options);
    }
    public function submitDeposit(Request $request)
    {
        $request->validate([
            "amount" => "required",
            "pay_option" => "required"
        ]);
        
        $pay_options = PayOption::where("active", "yes")->get();
        return view("pages.deposit")->with("pay_options", $pay_options);
    }
}
