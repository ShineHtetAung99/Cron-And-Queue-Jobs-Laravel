<?php

namespace App\Console\Commands;

use App\Mail\SubscriberMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:mail-cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = ['mgmg@gmail.com','aungaung@gmail.com','tuntun@gmail.com','hlahla@gmail.com'];
        foreach ($users as $user) {
            Mail::to($user)->queue(new SubscriberMail('hello'));
        }
    }
}
