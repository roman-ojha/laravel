<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;

Route::get('/', [StudentController::class,'index']);

Route::get('/about', function () {
    echo "About";
});

Route::get('/contact', function () {
    echo "Contact";
})->name('contact');

Route::view('/profile', 'profile');
