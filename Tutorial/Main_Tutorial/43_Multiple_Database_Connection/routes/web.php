<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/getqb', [UserController::class,'getUsingQueryBuilder']);

Route::get('/getmodel', [UserController::class,'getUsingModel']);
