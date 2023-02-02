<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // function to save car based on mechanic id
    public function add_car($id)
    {
        // $id is id of mechanic

        $mechanic = Mechanic::find($id);
        $car = new Car();
        $car->model = 'i10';
        $mechanic->car()->save($car);
    }
}
