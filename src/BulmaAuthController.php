<?php

namespace Ridrog\BulmaAuth;

use App\Http\Controllers\Controller;

class BulmaAuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegistrationForm ()
    {
        return view('auth.register');
    }

    public function showLinkRequestForm ()
    {
        return view('auth.passwords.email');
    }

    public function showResetForm ($token)
    {
        return view('auth.passwords.reset', compact('token'));
    }

}