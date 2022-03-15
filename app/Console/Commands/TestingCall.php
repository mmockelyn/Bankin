<?php

namespace App\Console\Commands;

use App\Service\Openpayd\Accounts;
use App\Service\Openpayd\Bank;
use Illuminate\Console\Command;

class TestingCall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testing:call';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $bank = new Bank();
        dd($bank->list());
        return 0;
    }
}
