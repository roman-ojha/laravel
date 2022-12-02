<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function owner()
    {
        // creating one to one relations with owner
        return $this->hasOne(Car::class);
    }
}
