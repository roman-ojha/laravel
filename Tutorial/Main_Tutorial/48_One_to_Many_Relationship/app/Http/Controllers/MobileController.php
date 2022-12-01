<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function show_customer($id)
    {
        // this function will get the Customer data base on Mobile id
        // $id: is the 'id' of Mobile not the customer
        $customer = Mobile::find($id)->customer;

        // return $customer;
        return view('customer', ['customer'=>$customer]);
    }
}
