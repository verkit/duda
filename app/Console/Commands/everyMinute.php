<?php

namespace App\Console\Commands;

use App\Order;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Console\Command;

class everyMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invoice:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Invoice checked completed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $payment = Payment::where("deadline", "<", Carbon::now())
            ->where('status', 'pending')
            ->get();

        foreach ($payment as $value) {
            Order::where('status', 1)
                ->where('invoice', $value->invoice)
                ->update([
                    'status' => 3,
                ]);
        }
    }
}
