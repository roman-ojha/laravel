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

    // Get post base on Author Id
    public function show_post($id)
    {
        $post = Author::find($id)->post;
        // another way
        $post = Author::where('id', $id)->select('id')->with(['author' => function ($q) {
            $q->select('id', 'username');
        }]);
        return $post;
    }

    public function get_posts()
    {
        // get all posts with specific author
        $post = Post::with('author')->get();

        // with selected specific column
        Post::select(['id', 'title', 'cat', 'author_id'])->with('author')->get();

        // with nested specific field
        Post::select('id', 'title', 'cat', 'author_id')->with(['author' => function ($q) {
            $q->select('id', 'username');
        }])->get();

        return $post;
    }
}
