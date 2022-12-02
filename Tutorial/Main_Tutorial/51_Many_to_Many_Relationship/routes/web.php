<?php

use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('add-song/', [SongController::class,'add_song']);
Route::get('add-singer/', [SingerController::class,'add_singer']);

Route::get('get-song/{id}', [SongController::class,'get_song']);
Route::get('get-singer/{id}', [SingerController::class,'get_singer']);
