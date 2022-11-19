<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    // function get<field_name>
    public function getSnameAttribute($value)
    {
        // now here we will get the 'sname' value
        // so now we can manipulate with that value here

        // here we are converting 1st letter of the value as capital
        return ucfirst($value);
    }

    public function getSaddressAttribute($value)
    {
        // modifying 'saddress' column value

        return $value." Roman";
    }
}
