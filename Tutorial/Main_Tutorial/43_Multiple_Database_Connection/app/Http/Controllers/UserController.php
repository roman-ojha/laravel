<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importing Database
use Illuminate\Support\Facades\DB;

// Importing Models
use App\Models\Student;
use App\Models\Employee;

class UserController extends Controller
{
    // Using Query Builder to access Multiple database
    public function getUsingQueryBuilder()
    {
        $database = 'mysql';

        if ($database == 'mysql') {
            // Here the first connection on mysql is done
            return DB::table('employee')->get();
        } else {
            // but to connect to the next database we have to do this
            return DB::connection('mysql2')->table('students')->get();
            // DB::connection('<database_name>')
        }
    }

    // Using Model to access Multiple database
    public function getUsingModel()
    {
        $database = 'mysql2';

        if ($database == 'mysql') {
            // Employee model is from 'mysql' database
            return Employee::all();
        } else {
            // Student model is from 'mysql2' database
            return Student::all();
        }
    }
}
