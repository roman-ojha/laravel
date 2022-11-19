<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // we will automatically save the data from controller rather then using form in blade template
        $student = new Student();
        $student->sname = ' RazzRoman';
        $student->saddress = 'Nepal';
        $student->sphone = 90874321;
        $student->sclass = 2;
        $student->save();
        return Student::all();
    }
}
