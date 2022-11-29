<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // return is also one type of response
        return "Hello world";

        // or we can use 'response' object where we can also pass the status code as well
        return response("Hello world", 200);

        // we can also send the here from response
        return response("Hello", 200)->header("Content-Type", "text/plain");

        // we can also set cookie to response header
        return response("Hello", 200)->cookie('name', "roman");

        // if we want to expire cookie that had been set
        return response("Hello", 200)->withoutCookie("name");

        // if we want to return view template then we can do this
        return view('welcome', ['data'=>'data']);

        // we can also use response view then we will do this
        // because of using response we can now send header as well
        return response()->view('welcome')->header("Content-Type", "text/html");

        // if you want to give json as response the we will use:
        return response()->json([
            "name"=>"Roman",
            "id"=>10,
            "city"=>"Kathmandu"
        ]);
    }
}
