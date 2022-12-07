<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    $string = "hello world";
    // Normal way to do operation to string
    echo Str::ucfirst($string)."<br/>";
    // 'ucfirst': make first letter capital
    echo Str::replaceFirst("hello", "hi", $string)."<br/>";
    // output: hi World
    echo Str::camel($string)."<br/>";
    // Output: helloWorld

    // Using Fluent String:
    echo Str::of($string)->replaceFirst("hello", 'hi', $string)->camel($string)->ucfirst($string)."<br/>";
    // Output: HiWorld
});
