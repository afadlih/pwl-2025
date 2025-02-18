<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [HomeController::class, 'choose'])->name('choose');


// Halaman Products (Category)
Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage'])->name('products.food_beverage');
    Route::get('beauty-health', [ProductController::class, 'beautyHealth'])->name('products.beauty_health');
    Route::get('home-care', [ProductController::class, 'homeCare'])->name('products.home_care');
    Route::get('baby-kid', [ProductController::class, 'babyKid'])->name('products.baby_kid');
});

// Halaman User
Route::get('user/{id}/name/{name}', [UserController::class, 'showProfile'])->name('user.profile');

// Halaman Penjualan (POS)
Route::get('sales', [SalesController::class, 'index'])->name('sales.index');