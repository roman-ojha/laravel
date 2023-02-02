<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getSnameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getSaddressAttribute($value)
    {
        return $value." Roman";
    }

    // public function set<column_name>Attribute()
    public function setSnameAttribute($value)
    {
        // we will get the value that user try to insert into database

        // modifying the 'sname' attribute before inserting it
        return $this->attributes['sname'] = "Mr. $value";
    }

    public function setSaddressAttribute($value)
    {
        // modifying the 'saddress' attribute before inserting it
        return $this->attributes['saddress'] = $value." Roman";
    }
}
