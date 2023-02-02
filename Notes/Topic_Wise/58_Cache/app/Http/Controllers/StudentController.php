<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StudentController extends Controller
{
    public function index()
    {
        // ************** Cache Facade ****************
        // Storing Item:
        Cache::put('name', 'roman', $second=10);
        Cache::put('id', 10, now()->addMinute(1));

        // remember('<key>','<seconds>','<closure_function>')
        Cache::remember('email', 10, function () {
            // if 'email key does exist then it will return the value of that exist on cache
            // if doesn't exist then it will return the value that we return from this function and also get store into cache
            return 'roman@gmail.com';
        });
        // Add method:
        // if given key doesn't exist on cache then it will add on cache and return true
        // if it exist then will not store in cache and return false
        Cache::add('name', 'razz');

        // Forever:
        // store data forever
        Cache::forever('product', 'laptop');

        // Retrieving Item
        echo Cache::get('name')."<br/>";
        echo Cache::get('id')."<br/>";
        // passing default value if key don't exist then return default value
        echo Cache::get('email', 'razz@gmail.com')."<br/>";
        // using closure
        echo Cache::get('product', function () {
            // if value exist then return
            // if don't exist then return the value that is returned by this function
            return 'mobile';
        })."<br/>";

        // Check Item:
        if (Cache::has('product')) {
            echo "Product exist <br/>";
        }

        // Remove Item:
        Cache::forget('product');
        // Remove by passing 0 time
        Cache::put('product', 'Laptop', 0);
        // Remove by passing negative time
        Cache::put('product', 'Laptop', -5);

        // Clear All Cache items
        Cache::flush();

        // Retrieving and store items:
        Cache::rememberForever('shirt', function () {
            return 10;
        });

        // Retrieving and Delete item:
        echo Cache::pull('name')."<br/>";

        // ************** Global Cache Helper ****************
        // Storing item
        // cache('<item>','<second>');
        cache(['name'=>'roman'], 10);
        cache(['id'=>10]);
        cache(['roll'=>25], now()->addMinutes(5));
        cache()->remember('city', 5, function () {
            return 'kathmandu';
        });
        cache()->add('product', 'laptop', 5);
        cache()->forever('product', 'mobile');

        // Retrieve Item:
        echo cache('name')."<br/>";
        echo cache('id', 12)."<br/>";
        echo cache('roll', function () {
            return 25;
        })."<br/>";

        // Check exist:
        if (cache()->has('xyz')) {
            echo "does exist <br/>";
        }

        // Remove items:
        cache()->forget('product');
        cache()->put('product', 'Laptop', 0);
        cache()->put('product', 'Laptop', -5);

        // Clear All Cache items
        cache()->flush();

        // Retrieving and store items:
        cache()->rememberForever('shirt', function () {
            return 10;
        });

        // Retrieving and Delete item:
        echo cache()->pull('name')."<br/>";
        return view('home');
    }
}
