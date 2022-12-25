<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;

    // We have to null the 'updated_at' field because we aren't using it
    public const UPDATED_AT = null;

    //
    protected $fillable =[
        'email',
        'token',
    ];
}
