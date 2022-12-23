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

        // After creating the user we will create a new token for that user to get authenticated
        // This authentication is done using Sanctum
        $token = $user->createToken($request->email)->plainTextToken;
        error_log($token);

        if ($user) {
            return response([
                'message'=>'Registration Successfully',
                'status'=>'success',
                'token'=>$token
            ], 201);
        }
        return response([
            'message'=>'Server Error',
            'status'=>'fail'
        ], 500);
    }

    public function login(Request $request)
    {
        // Function that will authenticate user and access Protected route to get access
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);


        $user = User::where('email', $request->email)->first();
        // Now we will check doest the given password by the user match with the database
        // we can use authenticate function as well to perform this task but we will do it manually
        if ($user && Hash::check($request->password, $user->password)) {
            // if User exist and password get match then we will generate new token
            $token = $user->createToken($request->email)->plainTextToken;
            error_log($token);

            return response([
                'message'=>'Login Successfully',
                'status'=>'success',
                'token'=>$token
            ], 200);
        }

        // If user & password doesn't match then user can't logged in
        return response([
            'message'=>"Email & Password doesn't match with user credential",
            'status'=>'fail'
        ], 401);
    }

    public function logout(Request $request)
    {
        // This function will logout the logged user
        // it means that it will remove the token create for the user in the database

        // so we will delete all the token create for that auth user
        auth()->user()->tokens()->delete();
        return response([
                'message'=>'Logout Successfully',
                'status'=>'success',
            ], 200);
    }

    public function logged_user()
    {
        // Function that will return logged/authenticated user

        $loggedUser = auth()->user();

        return response([
            "message"=>"Logged user data",
            "status"=>'success',
            "user"=>$loggedUser,
        ]);
    }
}
