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
        return $req->input();
    }
}
