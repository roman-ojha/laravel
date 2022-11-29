<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    // for 'includeWhen' & 'includeUnless' directive
    $user = "Guest";
    $userType = $user == "Admin" ? true : false;

    // for 'each' directive
    $students = [];

    return view('welcome', ['name'=>"Roman","userType"=>$userType,"students"=>$students]);
});

Route::get('/user', [UserController::class,'show']);
