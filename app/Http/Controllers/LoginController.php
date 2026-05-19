<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->only(
            'email',
            'password'
        );

        if(Auth::attempt($credentials))
        {

            $request->session()->regenerate();

            // CEK ROLE
            if(Auth::user()->role == 'seller')
            {
                return redirect('/seller/dashboard');
            }

            return redirect('/');
        }

        return back()->with(
            'error',
            'Email atau Password salah'
        );
    }
}