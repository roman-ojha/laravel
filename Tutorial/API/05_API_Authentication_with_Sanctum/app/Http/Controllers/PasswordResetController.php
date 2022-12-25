<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Message;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PasswordResetController extends Controller
{
    public function send_reset_password_email(Request $request)
    {
        // This function will send password reset on email

        // First we will validate the email
        $request->validate([
            'email'=>'required|email',
        ]);

        // Now we will check does the user exist or not with the given email
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response([
                'message'=>'Email doest not exist',
                'status'=>'failed'
            ], 404);
        }

        // Now if user exist then we will generate the token which will get pass to the url to reset the password
        // Generate Token with random
        $token = Str::random(60);

        // now here we will save data into password reset table
        PasswordReset::create([
            'email' => $request->email,
            'token'=> $token,
            'created_at'=> Carbon::now()
        ]);

        // Create url link that will get send to the user email
        dump("http://127.0.0.1:3000/api/reset/".$token);

        // Sending Email with password reset View


        // After sending the email we will response to the user
        return response([
            'message'=>'Password Reset Email Sent... Check Your Email',
            'status'=>'success',
        ], 200);
    }
}
