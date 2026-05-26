<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   
    public function index() 
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        // 1. Validate the request data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Regenerate session to prevent session fixation attacks
            $request->session()->regenerate();

            // 3. Role-based redirection
            if (Auth::user()->role === 'seller') {
                return redirect()->intended(route('seller.dashboard'));
            }

            // Default redirect for other roles (e.g., normal user dashboard)
            return redirect()->intended(route('dashboard'));
        }

        // 4. If login fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email'); // Keeps the email filled in for convenience
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}