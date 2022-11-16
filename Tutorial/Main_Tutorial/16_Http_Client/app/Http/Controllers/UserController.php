<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// include HTTP Client
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getUser()
    {
        // here we will request to the url with Http client using get method and then get response back
        $response = Http::get('https://reqres.in/api/users?page=1');
        // return $response;

        // we will now send the response data to 'user.blade.php' view where we will access the 'users' data
        $data = json_decode($response);
        return view('user', ["users"=>$data->data]);
    }
}
