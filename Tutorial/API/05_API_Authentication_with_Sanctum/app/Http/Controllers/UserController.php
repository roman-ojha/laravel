<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // function to register the new user

        // First validating the data
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'tc'=>'required',
        ]);

        // now we will check does given email exist on database or not
        if (User::where('email', $request->email)->first()) {
            return response([
                'message'=>'Email already exist',
                'status'=>'fail'
            ], 200);
        }

        // If doesn't exist then we will create a new user
        // And another this is we have to has the password before storing it into database
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            // because we set 'tc' type as boolean so we have to json decode before creating it
            'tc'=>json_decode($request->tc),
        ]);

        if ($user) {
            return response([
                'message'=>'Registration Successfully',
                'status'=>'success'
            ], 201);
        }
        return response([
            'message'=>'Server Error',
            'status'=>'fail'
        ], 500);
    }
}
