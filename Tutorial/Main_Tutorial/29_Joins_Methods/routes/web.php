<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/operations', [UserController::class,'operations']);
