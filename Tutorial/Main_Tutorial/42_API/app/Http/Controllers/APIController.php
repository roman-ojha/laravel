<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getMethod()
    {
        // we will pass data like this which will get access on JSON format

        return ["name"=>"Roman","id"=>13,"address"=>"Kathmandu"];
    }
}
