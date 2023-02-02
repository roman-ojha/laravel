<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('add-author', [AuthorController::class,'add_author']);

Route::get('add-post/{id}', [PostController::class,'add_post']);

Route::get('get-post/{id}', [PostController::class,'show_post']);

Route::get('get-author/{id}', [AuthorController::class,'get_author']);

Route::get('index/{id}', [IndexController::class,'index']);
