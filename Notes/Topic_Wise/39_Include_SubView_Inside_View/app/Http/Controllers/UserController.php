<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $name = "Roman";

        // for 'includeWhen' & 'includeUnless' directive
        $user = "Admin";
        $userType = $user == "Admin" ? true : false;

        // for 'each' directive
        $students = ["roman","razz","harry","jack","Thor"];

        return view('welcome', ["name"=>$name,"userType"=>$userType,"students"=>$students]);
    }
}
