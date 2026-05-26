<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{

    public function index()
    {
        return view('pages.register');
    }

    public function register(Request $request)
    {
        // 1. Validasi data
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // 2. Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'customer', 
        ]);

        // 3. Otomatis login
        Auth::login($user);

        // 4. REDIRECT LANGSUNG KE HALAMAN ORDER
        // Kita bawa data nama menggunakan ->with() agar bisa dibaca di halaman berikutnya
        return redirect()->route('order.index')->with('registered_name', $user->name);
    }
}