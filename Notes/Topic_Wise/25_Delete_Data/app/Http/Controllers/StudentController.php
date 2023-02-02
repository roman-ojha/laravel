<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function showStudents()
    {
        // $students = Student::paginate(2);
        $students = Student::all();

        return view('students', ['students'=>$students]);
    }

    public function insertStudent(Request $req)
    {
        $data = $req->input();

        $student = new Student();
        $student->sname = $data['sname'];
        $student->saddress = $data['saddress'];
        $student->sphone = $data['sphone'];
        $student->sclass = 1;
        $student->save();

        return redirect('/students');
    }

    // Creating Controller Function to delete Student Data
    public function deleteStudent(Request $req, $id)
    {
        // will find base on id column
        // $data = Student::find($id);
        // delete data
        // $data->data();

        // but we want to find data base on sid
        $data = Student::where('sid', '=', $id)->delete();
        return redirect('/students');
    }
}
