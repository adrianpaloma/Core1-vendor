<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Welcomecontroller extends Controller
{
    public function dashboard()
    {
        return view('home.admin.dashboard');
    }
    public function logins ()
    {
        return view('home.logins');
    }
    public function signup ()
    {
        return view('home.signup');
    }
    public function forgotpasswords ()
    {
        return view('home.forgot-passwords');
    }
    public function register ()
    {
        return view('auth.register');
    }
}
