<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// first we will import the model
use App\Models\Student;

class UserController extends Controller
{
    public function index()
    {
        return DB::select("SELECT * FROM students");
    }

    public function getStudent()
    {
        // Student::all() will get all the data from the table
        return Student::all();
    }
}
