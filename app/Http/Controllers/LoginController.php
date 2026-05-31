<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   
    public function index() 
    {
        return view('pages.login'); // Pastikan file login.blade.php ada di folder resources/views/pages/
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Cek Role jika seller
            if (Auth::user()->role === 'seller') {
                return redirect()->intended(route('seller.dashboard'));
            }

            // Jika customer atau default, langsung arahkan ke profile/halaman order
            return redirect()->intended(route('order.index'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}