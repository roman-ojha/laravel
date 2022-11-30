<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // by default if we will write create 'Student.php' model then it will map 'students' table
    // if we want to map another name table then we can do like this
    // EX: map to 'employee' table
    // public $table = 'employee';
    // here we map 'employee' table with Student Model

    public $table = 'students';

    // if you want to change the primary key then you can
    protected $primaryKey = 'sid';

    // if primary key is non incremented and no numeric then we have to define here
    protected $keyType = "string";

    // if you don't want incrementing then you can use this:
    public $incrementing = false;

    // if you don't want timestamp then you can do this:
    public $timestamps = false;

    // you can change the default name of timestamps
    public const CREATED_AT = 'creation_date';
    public const UPDATED_AT = 'updated_date';

    // if you want to use another database connection then you can do that as well
    // here we are using 'mysql' database for this model
    protected $connection = 'mysql';

    // if you want to create the data into database like in case of 'firstOrCreate' function we need to add this property
    // also for '<model>::create()' method this property is required
    protected $fillable = ['sname', 'saddress','sphone','sclass'];
}
