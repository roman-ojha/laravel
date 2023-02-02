<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // just by creating migration and referencing and creating foreign key would not create relation for the application
    // so we have to define the relationship inside the model

    public function mobile()
    {
        // function name should be the name of the model that we want to make relation to

        // now here we are defining the one to one relation with Mobile model
        // Here we are making the relation from Customer to Mobile
        // Customer -> Mobile
        // means using this relation we can get access the Mobile data using 'customer_id'
        return $this->hasOne(Mobile::class);
    }
}
