<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // here we are getting the '$key' of Device type
    public function index(Employee $key)
    {
        // this will return the record from database using 'id'
        // return employee having id = $key
        return $key;

        // return all the data
        return $key->all();
    }
}
