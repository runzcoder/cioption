<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class InvestmentController extends Controller
{
    public function settleInvestment()
    {
        $investments = Investment::where("status", "running")->where("next_due_date", "<", Carbon::now())->get();
        if (count($investments) > 0) {
            foreach ($investments as $invest) {
                $interest = self::getInterest($invest->amount, $invest->investmentType->roi);
                DB::transaction(function () use ($interest, $invest) {
                    $invest->next_due_date = self::getNextDueDate($invest->investmentType->duration);
                    $invest->save();
                    
                    BalanceController::updateBalance($invest->user_id, "profit", $interest, "", "Profit");
                });
            }
            return 1;
        } else {
            return 0;
        }
    }

    private static function getInterest($amount, $rate)
    {
        return round((($rate / 100) * $amount), 2);
    }

    public static function getNextDueDate($duration)
    {
        switch ($duration) {
            case "daily":
                return Carbon::now()->addDays(1);
                break;
            case "weekly":
                return Carbon::now()->addDays(7);
                break;
            case "bi-weekly":
                return Carbon::now()->addDays(14);
                break;
            case "monthly":
                return Carbon::now()->addDays(30);
                break;
            case "quarterly":
                return Carbon::now()->addDays(90);
                break;
            case "midyearly":
                return Carbon::now()->addDays(183);
                break;
            case "yearly":
                return Carbon::now()->addDays(365);
                break;
            default:
                throw new \ErrorException("Invalid duration");
                break;
        }
    }
}
