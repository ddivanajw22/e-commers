<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cart', function () {
    return view('pages.cart'); 
});

Route::get('/shop', function () {
    return view('pages.shop');
});