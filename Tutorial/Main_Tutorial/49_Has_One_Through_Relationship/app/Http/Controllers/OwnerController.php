<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Mechanic;
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

    // function to get owner base on Mechanic id
    public function get_owner($id)
    {
        // we can get the owner using mechanic id with out using 'hasOneThrough' like this:

        // getting owner data using mechanic id
        $owner = Mechanic::find($id)->car->owner;

        // getting owner using Mechanic id with 'hasOneThrough'
        $owner = Mechanic::find($id)->owner;

        return $owner;
    }
}
