<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // we can see all the available properties & methods that '$request' object or object have using this function
        // dd($request);

        // we can get the url path from where request is coming
        // dd($request->path());
        echo $request->path()."<br/>";

        // get url from where request is coming
        // dd($request->url());
        echo $request->url()."<br/>";

        // full url:
        // dd($request->fullUrl());
        echo $request->fullUrl()."<br/>";

        // get request method:
        // dd($request->method());
        echo $request->method()."<br/>";
        if ($request->isMethod('GET')) {
            echo "This is a get Method";
        }

        // get request header:
        // echo "<pre>";
        // print_r($request->header());
        // echo "</pre>";
        // get specific header
        echo $request->header('cookie')."<br/>";
        // if header doesn't exist then set the default value
        echo $request->header('X-Header-Name', 'Roman')."<br/>";

        // 'hasHeader'
        if (! $request->hasHeader('X-Header-Name')) {
            echo "Given header doesn't exist </br>";
        }

        // if you want to access the bearer token:
        echo $request->bearerToken()."</br>";

        // get user ip:
        echo $request->ip()."</br>";

        // see what are the content type that are acceptable
        echo "<pre>";
        print_r($request->getAcceptableContentTypes());
        echo "</pre>";
        // check does given content type is acceptable or not
        if ($request->accepts(['application/json','text/html'])) {
            echo "Accepted <br/>";
        }

        // get accessing Query String:
        // http://127.0.0.1:8000/?name=roman
        print_r($request->query());
        // get specific query string
        echo $request->query('name')."<br/>";
        // also you can give the default value for the specific query
        echo $request->query('id', 10)."<br/>";

        return view('welcome')."<br/>";
    }

    public function index1(Request $request, $id)
    {
        // you can get the dynamic url data as parameter
        echo $id;
    }

    public function index2(Request $request)
    {
        // if we want to check doest the request is coming from given url or not
        if ($request->is('admin/*')) {
            // EX: accept are:
            // http://127.0.0.1:8000/admin/one
            // http://127.0.0.1:8000/admin/two
            // http://127.0.0.1:8000/admin/two/xyz/abc
            echo "Admin area";
        } else {
            // EX:
            // http://127.0.0.1:8000/xyz/one
            echo "Guest area";
        }
    }

    public function index3(Request $request)
    {
        // we can also check does the request route name is given name or not
        if ($request->routeIs('admin.*')) {
            // EX: named route could be:
            // admin.one
            // admin.two.three
            echo "Admin area";
        } else {
            echo "Guest area";
        }
    }
}
