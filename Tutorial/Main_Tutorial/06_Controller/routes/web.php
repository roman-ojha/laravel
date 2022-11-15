<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // here we are routing the '/' root url with 'welcome' page
    // and that page is from '../resources/views/welcome.blade.php'
    return view('welcome');
});

Route::get('/contact', function () {
    // here we are routing the '/contact' root url with 'contact.blade.php' page
    return view('contact');
});

// Different way to route:
// here we are routing the '/about' root url with 'about.blade.php' page
Route::view('about', '/about');


// Redirecting to another page
Route::get('/abouts', function () {
    // if someone visit to '/abouts' page then we will redirect to '/about' page
    return redirect('/about');
});

// Passing data with routes
// we must have to put this type of route into last
// because now all the remaining route will come here
Route::get('/{name}', function ($name) {
    // now here by using '/{<name>}' we can access the user variable which will get pass the function params

    // echo $name;

    // if you want to pass the variable inside view then you want veo pass as array inside 'view' function
    return view('dynamic', ['name'=>$name]);
});
