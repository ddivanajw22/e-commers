<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;



Route::get('/', function () {
    return view('pages.index'); 
});

// Route::get('/', function () {
//     return view('pages.main menu.home'); 
// });

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);;

Route::get('/shop', [ShopController::class, 'index']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/bottom', [BottomController::class, 'index']);

Route::get('/dresses', [DressesController::class, 'index']);

Route::get('/outerwear', [OutwearController::class, 'index']);

Route::get('/activewear', [ActivewearController::class, 'index']);

Route::get('/order', [OrderController::class, 'index']);

// Route::get('/profile', function () {

//     return view('order');

// });

Route::get('/product/{id}', function ($id) {
    return view('pages.detail', ['productId' => $id]);
});

Route::get('/test-detail', function () {
    return view('pages.detail');
});

Route::get('/form', function () {

    return view('templates.form');

});

// Route::post('/login',
// [LoginController::class,'login']);

// Route::post('/register',
// [RegisterController::class,'register']);