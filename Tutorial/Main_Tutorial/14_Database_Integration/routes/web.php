<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

// using controller to access database
Route::get('/', [UserController::class,'index']);

Route::view('user', 'user');
