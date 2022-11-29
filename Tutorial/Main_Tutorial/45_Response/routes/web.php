<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;

Route::get('/', [StudentController::class,'index']);

// we can also send response from Route
Route::get('/res', function () {
    return response()->json([
        "page"=>'/res',
    ]);
});
