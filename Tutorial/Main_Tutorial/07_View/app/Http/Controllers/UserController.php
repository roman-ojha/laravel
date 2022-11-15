<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        return "Hello $id from Controller";
    }

    // here we will Call View from the controller and render it to specific route
    public function loadUserView($username)
    {
        // now here we are loading 'user' view from this controller function
        return view('users', ['username'=>$username]);
        // also we can pass parameter to View that can be able to access by view blade
    }
}
