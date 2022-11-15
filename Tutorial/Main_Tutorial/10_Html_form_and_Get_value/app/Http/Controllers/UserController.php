<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        return "Hello $id from Controller";
    }

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
}
