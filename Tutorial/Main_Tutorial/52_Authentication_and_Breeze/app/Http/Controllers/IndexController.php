<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    // function to get the user that is authenticated
    public function show_auth_user(Request $req)
    {
        $user = Auth::user();
        // return : {"id":1,"name":"Roman","email":"roman@gmail.com","email_verified_at":null,"created_at":"2022-12-02T11:08:08.000000Z","updated_at":"2022-12-02T11:08:08.000000Z"}

        // get user id
        $userId = Auth::id();

        $user = $req->user();
        return $user;
    }

    // function to see is the user ai authenticated or not
    public function is_authenticated()
    {
        if (Auth::check()) {
            return true;
        }
        return false;
    }
}
