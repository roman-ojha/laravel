<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // now here we will insert the data to 'customers' & 'mobile' table
    public function add_customer()
    {
        $mobile = new Mobile();
        $mobile->model = "LG100";
        // first we will create Mobile instance and then add data on it

        $customer = new Customer();
        $customer->name = 'roman';
        $customer->email = 'roman@gmail.com';
        // after that we will create Customer Instance and then add data on it as well

        $customer->save();
        // after that we wills save the Customer data
        // becaus mobile have relation with customer we have to save the data of mobile through customer
        // so we had create the 'mobile' function inside 'Customer' Model through that we can save the data of mobile
        $customer->mobile()->save($mobile);
    }

    public function show_mobile(Request $req, $id)
    {
        // here we will get the Mobile data from Customer id

        $mobile = Customer::find($id)->mobile;

        // return $mobile;
        return view('mobile', ['mobile'=>$mobile]);
    }
}
