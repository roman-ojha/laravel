<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    // function to add a new song
    public function add_song()
    {
        $song = new Song();
        $song->title = "Tum hi ho";
        $song->save();

        $song = new Song();
        $song->title = "Kaise Hua";
        $song->save();

        $song = new Song();
        $song->title = "Bekhayali";
        $song->save();

        $song = new Song();
        $song->title = "Afereen";
        $song->save();
    }

    // function to get the songs that is sang by the sing
    public function get_song($id)
    {
        // $id is the id of Singer
        $singer = Singer::find($id);
        return $singer->songs;
    }
}
