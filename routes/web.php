<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController, 
    RegisterController, 
    ShopController, 
    CartController, 
    WishlistController, 
    HomeProductController, 
    SellerController
};


Route::get('/', [HomeProductController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{category}', [ShopController::class, 'categoryFilter'])->name('shop.category');
Route::get('/product/{id}', function ($id) { return view('pages.detail', ['productId' => $id]); })->name('product.detail');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [ShopController::class, 'add'])->name('cart.add');

Route::post('/cart/remove/{index}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
}); 


Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    
    Route::get('/profile', function () { return view('pages.order'); })->name('profile');
    Route::get('/order', function () { return view('pages.order'); })->name('order.index');
    
    
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::post('/wishlist/toggle', [WishlistController::class, 'toggle'])->name('wishlist.toggle');
    
    Route::get('/seller/dashboard', [SellerController::class, 'dashboard'])->name('seller.dashboard');
    Route::post('/seller/order/{id}/konfirmasi', [SellerController::class, 'konfirmasiOrder'])->name('seller.konfirmasi');
});