<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// using Model
use App\Models\Student;

class StudentController extends Controller
{
    public function showStudents()
    {
        $students = Student::paginate(2);

        return view('students', ['students'=>$students]);
    }

    public function insertStudent(Request $req)
    {
        $data = $req->input();

        // Insert data into database
        $student = new Student();
        $student->sname = $data['sname'];
        $student->saddress = $data['saddress'];
        $student->sphone = $data['sphone'];
        $student->sclass = 1;
        $student->save();

        // NOTE: laravel say to have 'updated_at' column in table but we can by pass
        // for that we have to go to 'Student.php' Model and write this:
        // public $timestamps = false;

        return redirect('/students');
    }
}
