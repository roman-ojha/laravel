<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

// Get method
Route::get('/user', [UserController::class,'getMethod']);
// This route only accept GET method

// POST Method
Route::post('/user', [UserController::class,'postMethod']);

// PUT Method
Route::put('/user', [UserController::class,'putMethod']);

// Delete Method
Route::delete('/user', [UserController::class,'deleteMethod']);

Route::view('/user', 'user');
