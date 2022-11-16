<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// first we will import database
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // now you can do any kind of query
        return DB::select("SELECT * FROM students");
    }
}
