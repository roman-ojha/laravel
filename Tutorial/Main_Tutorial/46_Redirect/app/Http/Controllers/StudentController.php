<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TestController;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // here we are redirecting to '/about' page
        // return redirect('/about');

        // redirect using name route
        // return redirect()->route('contact');

        // route which have dynamic url
        // return redirect()->route('contact', ['id'=>1]);
        // EX: http://127.0.0.1:8000/contact?id=1

        // if you want to redirect to external pages then we can do this
        // return redirect()->away('https://www.google.com/');

        // if you want to redirect to some controller action then we can do this
        // return redirect()->action([UserController::class,'index']);

        // if you want to redirect with flash session data then:
        return redirect('/profile')->with('name', 'Roman');
        // this message will get store into flash session
    }
}
