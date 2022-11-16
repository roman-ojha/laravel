<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', [UserController::class,'index']);

// Route to get data from model
Route::get('/student', [UserController::class,'getStudent']);

Route::view('user', 'user');
