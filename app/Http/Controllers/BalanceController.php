<?php

namespace App\Http\Controllers;

use App\Models\TransactionHistory;
use App\Models\User;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(["auth", "admin"]);
    }

    public static function updateBalance($user_id, $update_type,  $amount, $currency_id=null, $description=null)
    {
        $user = User::find($user_id);
        $balance = $user->balance;
        if ($update_type == "funding" ||
        $update_type == 'reward' || 
        $update_type == 'profit'){
            $balance += $amount;
        }
        elseif ($update_type == 'invest'||
        $update_type =='withdrawal' ||
        $update_type =='transfer'
        )
        {
            if($amount > $user->balance)
            {
                throw throw new \ErrorException("Insufficient amount");
            }
            $balance -= $amount;
        }
        else{
            throw throw new \ErrorException("Invalid update type");
        }

        $user->balance = $balance;
        $user->save();

        //Notify user

        $trx = TransactionHistory::create([
            "user_id" => $user_id,
            "type" => $update_type,
            "currency_id" => $currency_id,
            "description" => $description,
            "amount" => $amount
        ]);
        return true;
    }
}
