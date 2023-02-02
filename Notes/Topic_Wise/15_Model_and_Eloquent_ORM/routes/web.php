<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

// Route to get data from model
Route::get('/', [StudentController::class,'show']);

// Route::view('user', 'user');
