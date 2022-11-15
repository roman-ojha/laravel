<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // to ue this controller we have to make a function
    // we can create any kind of the function
    // to call this function we have to create a route
    public function show($id)
    {
        // $id : is the parameter that we get from url

        // echo or return value will get show into the web page
        // echo "Hello";
        return "Hello $id from Controller";

        // No here we can do database connection or call View
        // or we control all the functionality of the application
    }
}
