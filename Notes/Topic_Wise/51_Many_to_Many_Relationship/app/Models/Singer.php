<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;

    // defining many to many relationship with Song Table
    public function songs()
    {
        // relation of Song sang by Singer
        return $this->belongsToMany(Song::class, 'singer_songs');
    }
}
