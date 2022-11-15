<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loadUserView($username)
    {
        $friends = [
            "Jack",
            "Blade",
            "Tom",
            "Harry",
            "Razz",
        ];
        return view('users', ['username'=>$username,'friends'=>$friends]);
    }

    public function getPostData(Request $req)
    {
        // now to this controller we are submitting the form

        // $req is the request object that we get from user request from the client side
        // now we will get the input field data:
        // {"_token":"eElvCQ4YdWslsctTSCMXNxUllyPE7d59uTmDWYeF","username":"roman","password":"ojha"}

        // Form validation
        $req->validate([
            // so here we are making 'username' and 'password' as required field
            'username' => 'required | max:10',
            'password' => 'required | min:5',
            // we will also apply max min character value validation
        ]);

        return $req->input();
    }
}
