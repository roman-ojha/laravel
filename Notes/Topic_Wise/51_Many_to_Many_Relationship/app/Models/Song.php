<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    // defining many to many relationship with Singer Table
    public function singers()
    {
        // relation of Singer sang songs
        return $this->belongsToMany(Singer::class, 'singer_songs');
    }
}
