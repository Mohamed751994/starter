<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Exception;
use Auth;

class SocialController extends Controller
{
    //FB
    public function redirectfb($service)
    {
      return Socialite::driver($service)->redirect();
    }

    public function callback($service)
    {
      $user = Socialite::with($service)->user();
      return $user;
    }



}
