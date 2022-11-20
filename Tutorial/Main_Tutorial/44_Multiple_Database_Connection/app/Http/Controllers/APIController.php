<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class APIController extends Controller
{
    public function searchStudent($query = null)
    {
        if ($query == null) {
            return "Please send us query string";
        }
        // Searching student based on given string
        $students = Student::where('sname', 'like', "%".$query."%")->get();
        if (sizeof($students)>0) {
            return $students;
        }
        return "No Students Found";
    }
}
