<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $array = [1,2,3,4,5,6,7,8,9];

        // Make new collection
        $collection = collect($array);

        // return all the element
        $data = $collection->all();
        print_r($data)."<br/>";

        // return average
        $data = $collection->average();
        echo $data."<br/>";

        // get the chunk of data
        $data = $collection->chunk(2);
        // return 2 chunk of data
        print_r($data)."<br/>";
        $data = $collection->chunk(2)->all();
        print_r($data)."<br/>";

        // get data in reverse order
        $data = $collection->reverse();
        print_r($data)."<br/>";

        // map method
        // take the callback and run for every element
        $data = $collection->map(function ($elm, $key) {
            return $elm+2;
        });
        print_r($data)."<br/>";
        $data = $collection->map(function ($elm, $key) {
            return $elm+2;
        })->chunk(2);
        print_r($data)."<br/>";

        // NOTE: see the documentation to learn all the method available on collection
    }
}
