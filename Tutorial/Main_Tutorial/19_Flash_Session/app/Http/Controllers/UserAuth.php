<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $req)
    {
        // we will just store username data into session
        $username = $req->input('user');

        // Store username into session
        $req->session()->put('user', $username);

        // reading the session data;
        // echo session('user');

        return redirect('/user');
    }
}
