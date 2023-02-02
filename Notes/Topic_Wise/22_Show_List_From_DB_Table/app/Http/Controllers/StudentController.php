<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// using Model
use App\Models\Student;

class StudentController extends Controller
{
    public function showStudents()
    {
        // fetching all students from database
        $students = Student::all();

        // rendering 'students' view blade and then passing 'students'
        return view('students', ['students'=>$students]);
    }
}
