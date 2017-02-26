<?php

namespace Ridrog\BulmaAuth;

use App\Http\Controllers\Controller;

class BulmaAuthController extends Controller
{

    public function showLoginForm()
    {
        return view('bulma-auth::login');
    }

    public function showRegistrationForm ()
    {
        return view('bulma-auth::register');
    }

    public function showLinkRequestForm ()
    {
        return view('bulma-auth::passwords.email');
    }

    public function showResetForm ($token)
    {
        return view('bulma-auth::passwords.reset', compact('token'));
    }

}