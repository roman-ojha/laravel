<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;

Route::get('/', [StudentController::class,'index']);

// we can also access request object inside Route
Route::get('/profile', function (Request $request) {
    dd($request);
});

// getting dynamic data
Route::get('/{id}', [StudentController::class,'index1']);


Route::get('/admin/one', [StudentController::class,'index2']);

// naming the route
Route::get('/admin/two', [StudentController::class,'index3'])->name('admin.two');
Route::get('/guest/two', [StudentController::class,'index3'])->name('guest.two');
