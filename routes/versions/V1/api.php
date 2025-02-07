<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/register', [\App\Http\Controllers\Api\V1\Auth\Register::class, 'register'])->name('register');
    Route::get('/category', [\App\Http\Controllers\Api\V1\Category\All::class,'getAll'])->name('categories');
    Route::get('/brand', [\App\Http\Controllers\Api\V1\Brand\All::class,'getAll'])->name('brands');
    Route::get('/color', [\App\Http\Controllers\Api\V1\Color\All::class,'getAll'])->name('colors');
});

Route::middleware('auth:sanctum')->group(function () {

});

