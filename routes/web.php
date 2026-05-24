<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BottomController;
use App\Http\Controllers\DressesController;
use App\Http\Controllers\OutwearController;
use App\Http\Controllers\ActivewearController;


Route::get('/', function () {
    return view('pages.index'); 
});


Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);


Route::get('/shop', [ShopController::class, 'index']);
Route::get('/bottom', [BottomController::class, 'index']);
Route::get('/dresses', [DressesController::class, 'index']);
Route::get('/outerwear', [OutwearController::class, 'index']);
Route::get('/activewear', [ActivewearController::class, 'index']);


Route::post('/cart/add', [ShopController::class, 'add']); 
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/remove', [CartController::class, 'remove']); 


Route::get('/product/{id}', function ($id) {
    return view('pages.detail', ['productId' => $id]);
});

Route::get('/test-detail', function () {
    return view('pages.detail');
});

Route::get('/wishlist', function () {
    return view('wishlist'); 
});

Route::get('/form', function () {
    return view('templates.form');
});
