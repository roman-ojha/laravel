<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    // controller function to add mechanic into database
    public function add_mechanic()
    {
        $mechanic = new Mechanic();
        $mechanic->name = 'Razz';
        $mechanic->save();
    }
}
