<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    // function to add owner base on car id
    public function add_owner($id)
    {
        $car = Car::find($id);
        $owner = new Owner();
        $owner->name = 'Roman';
        $car->owner()->save($owner);
    }
}
