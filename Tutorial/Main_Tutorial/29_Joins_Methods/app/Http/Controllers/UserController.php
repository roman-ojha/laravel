<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function operations()
    {
        // Sum Operation on 'sid'
        echo "Sum:";
        echo DB::table('students')->sum('sid')."</br>";

        // Min Operation on 'sid'
        echo "Min: ";
        echo DB::table('students')->min('sid')."</br>";

        // Max Operation on 'sname'
        echo "Max: ";
        echo DB::table('students')->max('sname')."</br>";

        // Average Operation on 'sid'
        echo "Average: ";
        echo DB::table('students')->max('sid')."</br>";
    }
}
