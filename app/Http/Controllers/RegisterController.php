<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index() {
        // Disini Isi Dengan Halaman Registrasi (Datanya Nama Sama Email Sama Password Aja)
        return view();
    }
    public function register(Request $request)
    {

        $photo = null;

        if($request->hasFile('photo'))
        {
            $photo = $request->file('photo')
            ->store('profile','public');
        }

        User::create([

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,

            'role' => $request->role,

            'photo' => $photo,

            'password' =>
            Hash::make($request->password)

        ]);

        return redirect('/form');
    }
}