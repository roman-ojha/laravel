<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

Route::get('/join', [StudentController::class,'joinOperation']);
