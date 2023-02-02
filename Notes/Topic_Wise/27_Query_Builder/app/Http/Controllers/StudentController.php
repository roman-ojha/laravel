<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

// importing Database
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents()
    {
        // Accessing Table with Database using Query Builder
        $students = DB::table('students')->get();
        $studentArray = json_decode(json_encode($students), true);

        // We can use 'find' to find base on id
        // DB::table('students')->find(10);

        return view('students', ['students'=> $studentArray]);
    }

    public function insertStudent(Request $req)
    {
        $data = $req->input();

        // Insert Operation using Query builder
        DB::table('students')->insert([
            ['sname'=>$data['sname'],'saddress'=>$data['saddress'],'sphone'=>$data['sphone'],'sclass'=>1]
        ]);
        return redirect('/students');
    }

    public function deleteStudent($id)
    {
        // Deleting Data using Query Builder
        DB::table('students')->where('sid', '=', $id)->delete();
        return redirect('/students');
    }

    // Creating Controller Function to Updating Student Data
    public function getEditingStudent($id)
    {
        // Getting data using where clause With Query Builder
        $student = DB::table('students')->where('sid', '=', $id)->get();
        $studentArray = json_decode(json_encode($student), true);
        return view('edit', ['student' => $studentArray[0]]);
    }

    public function editStudent(Request $req)
    {
        // Updating data using Query Builder
        $updatedStudent = $req->input();
        DB::table('students')->where('sid', '=', $updatedStudent['sid'])->update(
            ['sname'=>$updatedStudent['sname'],'saddress'=>$updatedStudent['saddress'],'sphone'=>$updatedStudent['sphone']]
        );

        return redirect('/students');
    }
}
