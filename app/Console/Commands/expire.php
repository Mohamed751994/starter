<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;

class expire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expire For User Every 5 minutes automatically';

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
        //handle of expire data

        $users = User::where('expire', 0)->get(); // Collection of users


        foreach ($users as $user)
        {
          $user->update([
            'expire' => 1,
          ]);
        }



    }
}
