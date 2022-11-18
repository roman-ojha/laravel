<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('home');
});

// Route for view
Route::view('upload', 'upload');

// Route for Post Request to upload file
Route::post('upload', [UploadController::class,"uploadFile"]);
