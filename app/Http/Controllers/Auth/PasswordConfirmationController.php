<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordConfirmationController extends Controller
{
    public function show()
    {
        return view('auth.confirm-password');
    }

    public function store(Request $request)
    {
        if (! Hash::check($request->password, $request->user()->password)) {
            return back()->withErrors([
                'password' => ['The provided password does not match our records.']
            ]);
        }

        $request->session()->passwordConfirmed();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
