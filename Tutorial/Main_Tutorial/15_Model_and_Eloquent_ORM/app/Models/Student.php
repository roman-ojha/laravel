<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // by default if we will write create 'Student.php' model then it will map 'students' table
    // if we want to map another name table then we can do like this
    public $table = 'employee';
    // here we map 'employee' table with Student Model
}
