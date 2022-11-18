<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('home');
});


Route::get('/profile/{lang}', function ($lang) {
    // Setting the local language based on route parameter
    App::setlocale($lang);
    // NOTE: if you will pass random $lang that doesn't exist on application then it will show us a default language
    return view('profile');
});
