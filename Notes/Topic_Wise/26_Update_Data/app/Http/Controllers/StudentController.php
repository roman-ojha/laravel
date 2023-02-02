<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function showStudents()
    {
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

    public function deleteStudent($id)
    {
        $data = Student::where('sid', '=', $id)->delete();
        return redirect('/students');
    }

    // Creating Controller Function to Updating Student Data
    public function getEditingStudent($id)
    {
        $student = Student::where('sid', '=', $id)->get();
        return view('edit', ['student' => $student[0]]);
    }

    public function editStudent(Request $req)
    {
        // Another way to update base on id column
        // $data = Student::find($req->input()['id']);
        // $data->name = <value>
        // $data->save();

        $updatedStudent = $req->input();
        // Updating Data base on input field
        Student::where('sid', '=', $updatedStudent['sid'])->update(
            ['sname'=>$updatedStudent['sname'],'saddress'=>$updatedStudent['saddress'],'sphone'=>$updatedStudent['sphone']]
        );

        return redirect('/students');
    }
}
