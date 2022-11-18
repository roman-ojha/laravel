<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// using Model
use App\Models\Student;

class StudentController extends Controller
{
    public function showStudents()
    {
        // paginating data from student table
        $students = Student::paginate(2);

        // rendering 'students' view blade and then passing 'students'
        return view('students', ['students'=>$students]);
    }
}
