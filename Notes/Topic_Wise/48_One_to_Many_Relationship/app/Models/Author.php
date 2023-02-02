<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function post()
    {
        // here we will create the relation ship between 'Author' and 'Post'
        return $this->hasMany(Post::class);
    }
}
