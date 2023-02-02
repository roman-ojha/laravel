<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($id)
    {
        // this function will get the data of author and it's post base on Author id

        // getting author data
        $author = Author::find($id);
        var_dump($author->username);
        // getting post data using author
        var_dump($author->post[0]->title);
        var_dump($author->post[1]->title);
        foreach ($author->post as $post) {
            echo $post->title;
        }
    }
}
