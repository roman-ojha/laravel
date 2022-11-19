<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class APIController extends Controller
{
    public function test()
    {
        // we will pass data like this which will get access on JSON format

        return ["name"=>"Roman","id"=>13,"address"=>"Kathmandu"];
    }

    public function getMethod()
    {
        return Student::all();
    }
}
