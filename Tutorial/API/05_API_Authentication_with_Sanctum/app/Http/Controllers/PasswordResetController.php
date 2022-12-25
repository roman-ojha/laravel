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
use Error;

class PasswordResetController extends Controller
{
    public function send_reset_password_email(Request $request)
    {
        // This function will send password reset on email

        // First we will validate the email
        $request->validate([
            'email'=>'required|email',
        ]);
        $email = $request->email;

        // Now we will check does the user exist or not with the given email
        $user = User::where('email', $email)->first();
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
            'email' => $email,
            'token'=> $token,
            'created_at'=> Carbon::now()
        ]);

        // Create url link that will get send to the user email
        $url ="http://127.0.0.1:8000/api/reset-password/".$token;
        error_log("URL: ".$url);

        // Sending password reset url into Gmail
        // Mail::send('<view_which_you_want_to_send_on_email','<data_to_pass_on_view_template>')
        Mail::send('reset', ['token'=>$token], function (Message $message) use ($email) {
            $message->subject("Reset Your Password");
            // on which email you want to send url
            $message->to($email);
        });



        // After sending the email we will response to the user
        return response([
            'message'=>'Password Reset Email Sent... Check Your Email',
            'status'=>'success',
        ], 200);
    }

    public function reset(Request $request, $token)
    {
        // function that will reset the password from the token and new password provided
        error_log($request->password, $request->conformation_password);

        // First we will validate the password
        $request->validate([
            'password'=>'required|confirmed',
        ]);

        // now we will identify the user from the given token
        $passwordReset = PasswordReset::where('token', $token)->first();

        if (!$passwordReset) {
            // User didn't get found
            return response([
                'message'=>"Token is Invalid or Expired",
                'status'=>'failed',
            ], 404);
        }

        // Now we will get the user from email exist on '$passwordReset
        $user = User::where('email', $passwordReset->email)->first();

        // Now we will change the password
        $user->password = Hash::make($request->password);
        $user->save();

        // Delete the token after resseting password
        PasswordReset::where('email', $user->email)->delete();

        return response([
            'message'=>'Password Reset Successfully',
            'status'=>'success'
        ]);
    }
}
