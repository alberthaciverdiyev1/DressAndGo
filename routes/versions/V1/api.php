<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/register', [\App\Http\Controllers\Api\V1\Auth\Register::class, 'register'])->name('register');
    Route::post('/login', [\App\Http\Controllers\Api\V1\Auth\Login::class, 'login'])->name('login');
    Route::get('/category', [\App\Http\Controllers\Api\V1\Category\All::class,'getAll'])->name('categories');
    Route::get('/brand', [\App\Http\Controllers\Api\V1\Brand\All::class,'getAll'])->name('brands');
    Route::get('/color', [\App\Http\Controllers\Api\V1\Color\All::class,'getAll'])->name('colors');
    Route::get('/shop', [\App\Http\Controllers\Api\V1\Shop\All::class,'getAll'])->name('shop');
    Route::get('/shop/{id}', [\App\Http\Controllers\Api\V1\Shop\All::class,'details'])->name('shopDetails');
});

Route::middleware('auth:sanctum')->group(function () {

});

