<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function author()
    {
        // so we know that one Author can have Multiple Post so one Author have Many Post i.e: One-Many relationship
        // for that we added 'post' method on 'Author' Model class

        // But one Post can only belongs to One Author so we just have to use 'belongsTo'
        return $this->belongsTo(Author::class);
    }
}
