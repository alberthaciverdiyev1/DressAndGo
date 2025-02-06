<?php

use App\Http\Web\HomeController;
use App\Http\Web\StaticPageController;
use Illuminate\Support\Facades\Route;


//Route::controller(HomeController::class)->group(function () {})
//Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/about', [HomeController::class, 'about'])->name('about');
//Static pages

Route::get('/contact', [StaticPageController::class, 'contact'])->name('contact');
Route::get('/', [HomeController::class, 'home'])->name('home');
