<?php

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\CartController;

use App\Http\Controllers\BottomController;

use App\Http\Controllers\DressesController;

use App\Http\Controllers\OuterwearController;

use App\Http\Controllers\ActivewearController;

use App\Http\Controllers\WishlistController;

use App\Http\Controllers\HomeProductController;

use App\Http\Controllers\SellerController;

use App\Http\Controllers\AuthController;



Route::get('/', function () { return view('pages.index'); });


// 1. GROUP UNTUK USER YANG BELUM LOGIN (GUEST)
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
}); // <-- Penutup group guest yang benar



// 2. GROUP UNTUK USER YANG SUDAH LOGIN (AUTH)
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Route halaman order
    Route::get('/order', function () {
        return view('pages.order');
    })->name('order.index');

    // Route Seller Dashboard
    Route::get('/seller/dashboard', function () {
        return view('seller.dashboard');
    })->name('seller.dashboard');

    // Route General Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); // <-- Penutup group auth yang benar

Route::get('/', [HomeProductController::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);

Route::get('/bottom', [BottomController::class, 'index']);

Route::get('/dresses', [DressesController::class, 'index']);

Route::get('/outerwear', [OuterwearController::class, 'index']);

Route::get('/activewear', [ActivewearController::class, 'index']);





Route::get('/new-arrival', [HomeProductController::class, 'newArrival']);

Route::get('/best-seller', [HomeProductController::class, 'bestSeller']);

Route::get('/on-discount', [HomeProductController::class, 'onDiscount']);



Route::get('/category/{category}', [HomeProductController::class, 'category']);



Route::get('/wishlist', [WishlistController::class, 'index']);



Route::post('/cart/add', [ShopController::class, 'add']);

Route::get('/cart', [CartController::class, 'index']);

Route::post('/cart/remove', [CartController::class, 'remove']);
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');





Route::post('/wishlist/toggle', [WishlistController::class, 'toggle']);





Route::get('/product/{id}', function ($id) { return view('pages.detail', ['productId' => $id]); }); 

Route::get('/seller/dashboard', [SellerController::class, 'dashboard'])->name('seller.dashboard');
Route::post('/seller/order/{id}/konfirmasi', [SellerController::class, 'konfirmasiOrder'])->name('seller.konfirmasi');
