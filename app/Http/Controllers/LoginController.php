<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   

    public function index() {
        // Disini Isi Halaman Untuk Login
        return view('');
    }
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
            if(Auth::user()->role == 'admin')
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