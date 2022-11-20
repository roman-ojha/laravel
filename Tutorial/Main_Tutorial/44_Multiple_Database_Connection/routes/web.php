<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('home');
});
