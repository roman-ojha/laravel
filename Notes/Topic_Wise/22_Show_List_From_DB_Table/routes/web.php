<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

// using '/students' route to render View by passing Model Data into Controller
Route::get('students', [StudentController::class,'showStudents']);
