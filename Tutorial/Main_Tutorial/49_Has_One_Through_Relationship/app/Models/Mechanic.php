<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function car()
    {
        // creating one to one relations with cars
        return $this->hasOne(Car::class);
    }

    public function owner()
    {
        // this will create a relation with Owner model
        // Mechanic -> Car -> Owner
        return $this->hasOneThrough(Owner::class, Car::class);
    }
}
