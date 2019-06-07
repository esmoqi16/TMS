<?php

namespace App\Http\Controllers\Auth;

use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    protected function redirectTo() {
        if (Auth::user()->admin)
            return 'dashboard';
        else
            return 'home';
    }
}