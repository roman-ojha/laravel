<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getMethod(Request $req)
    {
        // To get the GET Method data we can use this:
        return $req->input();
    }

    // for post Method
    public function postMethod(Request $req)
    {
        return $req->input();
    }

    public function putMethod(Request $req)
    {
        return $req->input();
    }

    public function deleteMethod(Request $req)
    {
        echo "Delete Method";
        return $req->input();
    }
}
