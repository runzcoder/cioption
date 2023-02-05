<?php

namespace App\Console\Commands;

use App\Http\Controllers\InvestmentController;
use Illuminate\Console\Command;

class SettleInvestment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:settle_investment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Settle Investment daily';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $inv = new InvestmentController();
        $status = $inv->settleInvestment();
        if($status)
        {
            return Command::SUCCESS;
        }
        return Command::FAILURE;
    }
}
