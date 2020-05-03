<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyEmail;
class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email Notify For all users every day';

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

        $emails = User::pluck('email')->toArray(); // ['email1', 'email2',....]

        $data = ['title'=>'programming', 'body'=>'php'];
        foreach ($emails as $email)
        {
          // send email for users everydays
          Mail::To($email)->send(new NotifyEmail($data));
        }



    }
}
