<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Public Route: No need to authenticate =======

// Route to register the new user
Route::post('/register', [UserController::class,'register']);

// Route to login the user
Route::post('/login', [UserController::class,'login']);


// Protected Route: need to authenticate =======

Route::middleware(['auth:sanctum'])->group(function () {
    // Route to logout user using token
    Route::post('/logout', [UserController::class,'logout']);

    // Route to get the logged user data
    Route::get('/get-user', [UserController::class,'logged_user']);

    // Route to change uer password
    Route::post('/changepassword', [UserController::class,'changePassword']);
});
