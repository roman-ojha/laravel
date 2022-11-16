<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Student;

class UserController extends Controller
{
    public function index()
    {
        return DB::select("SELECT * FROM students");
    }

    public function getStudent()
    {
        return Student::all();
    }
}
