<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsSeller
{
    // public function handle(Request $request, Closure $next): Response
    // {
    //     // Cek apakah sudah login, dan apakah role-nya adalah 'seller'
    //     if (Auth::check() && Auth::user()->role === 'seller') {
    //         return $next($request);
    //     }

    //     // Jika bukan seller, tendang kembali ke halaman utama dengan pesan error
    //     return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    // }
}
