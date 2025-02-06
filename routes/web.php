<?php

use App\Http\Web\HomeController;
use App\Http\Web\ShopController;
use App\Http\Web\StaticPageController;
use Illuminate\Support\Facades\Route;


//Route::controller(HomeController::class)->group(function () {})
//Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/about', [HomeController::class, 'about'])->name('about');
//Static pages

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [StaticPageController::class, 'contact'])->name('contact');
Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'shop'])->name('shopList');
    Route::get('/details', [ShopController::class, 'details'])->name('shopDetails');
    Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
    Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');
    Route::get('/wishlist', [ShopController::class, 'wishlist'])->name('wishlist');
});
