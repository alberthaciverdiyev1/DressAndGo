<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');
//Route::prefix('v1')->group(base_path('routes/api_v1.php'));

Route::prefix('v1')->group(function () {
    Route::post('/register', [\App\Http\Controllers\Api\V1\Auth\Register::class, 'register'])->name('register');
    Route::get('/category', [\App\Http\Controllers\Api\V1\Category\All::class,'getAll'])->name('categories');
});

Route::middleware('auth:sanctum')->group(function () {

});

