<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function create()
    {
        return view('auth.reset-password');
    }

    public function store(Request $request)
    {
    }
}
