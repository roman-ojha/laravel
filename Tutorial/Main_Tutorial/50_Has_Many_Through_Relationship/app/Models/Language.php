<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    // creating one-to-many relation with Deployment from language
    // Language --> Deployment
    //    |-------> Deployment
    public function deployment()
    {
        return $this->hasMany(Deployment::class);
    }
}
