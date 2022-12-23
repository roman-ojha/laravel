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
