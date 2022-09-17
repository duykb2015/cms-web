<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function login()
    {
        return view('login/login');
    }
    public function register()
    {
        return view('login/register');
    }
}
