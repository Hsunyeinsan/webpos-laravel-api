<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::controller(AuthController::class)->group(function (){
    Route::post('/register',"register");
    Route::post("/login","login");
});

Route::middleware('auth:sanctum')->group(function(){
    Route::controller(ProfileController::class)->prefix('user-profile')->group(function (){
        Route::get('/show','show');
        Route::patch('/logout','logout');
        Route::patch('/change_password','changePassword');
        Route::patch('/change_name','changeName');
        Route::patch('/change_image','changeProfileImage');
    });   
    Route::apiResource('photos',PhotoController::class)->only('store','destroy'); 
});