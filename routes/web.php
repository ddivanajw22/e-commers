<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index'); 
});
Route::get('/login', function () {
    return view('auth');
});

Route::get('/register', function () {
    return view('register'); 
});

Route::get('/dashboard', function () {
    return view('pages.index2'); 
});

Route::get('/shop', function () {
    return view('pages.shop');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/bottom', function () {
    return view('pages.bottom'); 
});

Route::get('/dresses', function () {
    return view('pages.dresses');
});