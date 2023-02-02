<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class UploadController extends Controller
{
    public function uploadFile(Request $req)
    {
        // Getting file data
        $file = $req->file('file');
        // file('<name_of_input_form>')
        if ($file) {
            // Storing File
            return $file->store('img');
            // store('<folder_name>')
            // default path where file will get store is './storage/app'
        }
        return "File Doesn't exist";
    }
}
