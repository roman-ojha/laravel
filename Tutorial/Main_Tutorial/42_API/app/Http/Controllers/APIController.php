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

    public function getWithId($id = null)
    {
        // responding all the data if we didn't get the id, if we get it we will send the specific id
        if ($id==null) {
            return Student::all();
        }
        return Student::where('sid', '=', $id)->get();
    }
}
