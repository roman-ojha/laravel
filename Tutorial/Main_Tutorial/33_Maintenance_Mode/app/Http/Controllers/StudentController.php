<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function joinOperation()
    {
        // Getting 'students' with it's 'students_class' using Join operation
        $students = DB::table('students')
        ->join('students_class', 'students.sclass', '=', 'students_class.cid')
        ->get();

        // adding select operation as well
        $students = DB::table('students')
        ->join('students_class', 'students.sclass', '=', 'students_class.cid')
        // selecting 'students' {sid, sname, saddress} and 'students_class' data
        ->select('students.sid', 'students.sname', 'students.saddress', 'students_class.*')
        ->get();

        // Adding Where condition as well
        $students = DB::table('students')
        ->join('students_class', 'students.sclass', '=', 'students_class.cid')
        ->select('students.sid', 'students.sname', 'students.saddress', 'students_class.*')
        ->where('students.sid', '=', '10')
        ->get();
        // Output: [{"sid":10,"sname":"Roman Razz","saddress":"Baneshwor","cid":2,"cname":"Btech"}]

        return $students;
    }
}
