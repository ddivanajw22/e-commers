<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\CartController;

use App\Http\Controllers\BottomController;

use App\Http\Controllers\DressesController;

use App\Http\Controllers\OuterwearController;

use App\Http\Controllers\ActivewearController;

use App\Http\Controllers\WishlistController;

use App\Http\Controllers\HomeProductController;



Route::get('/', function () { return view('pages.index'); });



Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);



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





Route::post('/wishlist/toggle', [WishlistController::class, 'toggle']);





Route::get('/product/{id}', function ($id) { return view('pages.detail', ['productId' => $id]); }); 


