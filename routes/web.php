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

use App\Http\Controllers\HomeProductController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Order2Controller;

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
});

Route::get('/', [HomeProductController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/bottom', [BottomController::class, 'index'])->name('shop.bottom');
Route::get('/dresses', [DressesController::class, 'index'])->name('shop.dresses');
Route::get('/outerwear', [OuterwearController::class, 'index'])->name('shop.outerwear');
Route::get('/activewear', [ActivewearController::class, 'index'])->name('shop.activewear');

Route::get('/category/{category}', [HomeProductController::class, 'category'])->name('shop.category');
Route::get('/product/{id}', function ($id) { return view('pages.detail', ['productId' => $id]); })->name('product.detail');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () { return view('pages.order'); })->name('dashboard');
    Route::get('/profile', function () { return view('pages.order'); })->name('profile');
    Route::get('/order2', [Order2Controller::class, 'done'])->name('order.done');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [ShopController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove/{index}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    
    Route::get('/seller/dashboard', [SellerController::class, 'dashboard'])->name('seller.dashboard');
    Route::post('/seller/order/{id}/konfirmasi', [SellerController::class, 'konfirmasiOrder'])->name('seller.konfirmasi');
});