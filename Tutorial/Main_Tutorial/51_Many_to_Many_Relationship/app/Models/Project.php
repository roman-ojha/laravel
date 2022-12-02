<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // creating one-to-many relation with language from project
    // project --> Language
    //    |------> Language
    public function language()
    {
        return $this->hasMany(Language::class);
    }

    //
    public function deployment()
    {
        return $this->hasManyThrough(Deployment::class, Language::class);
    }
}
