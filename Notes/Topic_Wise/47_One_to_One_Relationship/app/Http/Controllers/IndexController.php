<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // this controller will show both the 'Customer' & 'Mobile' data
    public function index($id)
    {
        // getting customer data using it's id
        $customer = Customer::find($id);

        var_dump($customer->name);

        // now we want to see which Mobile 'model' customer have
        // here we are accessing mobile data using customer
        $mobile = $customer->mobile;
        var_dump($mobile->model);

        // getting Customer data using Mobile Model id
        $customer = Mobile::find($id)->customer;
        var_dump($customer->name);

        // getting Mobile data using Customer id
        $mobile = Customer::find($id)->mobile;
        var_dump($mobile->model);
    }
}
