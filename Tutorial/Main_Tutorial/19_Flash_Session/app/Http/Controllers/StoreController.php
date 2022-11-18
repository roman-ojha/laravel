<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class StoreController extends Controller
{
    public function storeUser(Request $req)
    {
        // Storing user name into flash session
        $data = $req->input('user');

        // Storing Flash Session
        $req->session()->flash('user', $data);

        // Flash Data during Redirect
        // return redirect('store')->with('user', $data);

        return redirect('store');
    }
}
