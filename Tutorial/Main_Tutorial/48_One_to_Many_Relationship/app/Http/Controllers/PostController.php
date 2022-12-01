<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_post($id)
    {
        // $id is the id of Author that we get and we will post the data for that author
        $post = new Post();
        $post->title = 'Hello world';
        $post->cat = 'Cat 1';

        // we will first get the data of the author using $id
        $author = Author::find($id);
        // now we will save the post data base on the author that we get on $id
        $author->post()->save($post);
    }
}
