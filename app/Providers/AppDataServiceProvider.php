<?php

namespace App\Providers;

use App\Http\Controllers\SettingsController;
use App\Models\Currency;
use App\Models\Deposit;
use App\Models\Investment;
use App\Models\InvestmentType;
use App\Models\Setting;
use App\Models\TransactionHistory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
        View::composer('*', function($view){
            if(Auth::check()){
                $user = User::find(Auth::user()->id);
                $deposits = Deposit::orderBy("id", "desc")->paginate(10);
                $trx = TransactionHistory::orderBy("id", "desc")->paginate(5);
                $investments = Investment::orderBy("id", "desc")->paginate(10);
                $investmentTypes = InvestmentType::orderBy("id", "desc")->paginate(10);
                $users = User::orderBy("id", "desc")->paginate(10);
                $settings = Setting::orderBy("id", "desc")->paginate(10);
                $currencies = Currency::where("active", "yes")->get();
                $view->with('_loggedUser', $user)
                    ->with('_deposits',$deposits)
                    ->with('_trx',$trx)
                    ->with('_investments', $investments)
                    ->with('_investmentTypes', $investmentTypes)
                    ->with('_users', $users)
                    ->with('_settings', $settings)
                    ->with("_getSetting", SettingsController::class)
                    ->with("_currencies", $currencies);
            }
        });

    }
}
