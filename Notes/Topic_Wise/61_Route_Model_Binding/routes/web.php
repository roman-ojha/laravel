<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('home');
});

// get model data with id
// Route::get('/device/{key}', [EmployeeController::class,'index']);

// get model data with name
// {key:<model_field_name>}
Route::get('/device/{key:sname}', [EmployeeController::class,'index']);
// return : {"sid":11,"sname":"Razz","saddress":"nepal","sclass":3,"sphone":"898743212"}
