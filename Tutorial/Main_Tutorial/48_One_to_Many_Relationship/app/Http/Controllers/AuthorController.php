<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function add_author()
    {
        // here we will add new data to author and add post for that author
        // so before we first have to add author only after that we can add post for that author
        $author = new Author();
        $author->username = "Roman";
        $author->password = "Roman111";
        $author->save();
    }
}
