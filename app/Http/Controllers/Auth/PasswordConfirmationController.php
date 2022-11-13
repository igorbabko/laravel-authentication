<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class PasswordConfirmationController extends Controller
{
    public function show()
    {
        return view('auth.confirm-password');
    }
}
