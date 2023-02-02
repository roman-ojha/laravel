<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;

    public function customer()
    {
        // now here we are making relation from Mobile to Customer
        // Mobile -> Customer
        // now we can get the customer data using Mobile model
        return $this->belongsTo(Customer::class);
    }
}
