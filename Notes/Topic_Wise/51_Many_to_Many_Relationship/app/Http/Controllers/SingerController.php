<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    // function to add new singer base and we will make relation with 'Song' Model
    public function add_singer()
    {
        // first we will create new singer and save that data
        $singer = new Singer();
        $singer->name = "Roman";
        $singer->save();

        // after that we have to mention which song is sing by whom
        // list of Song id that singer 'Roman' sang
        $songIds = [1,2];
        $singer->songs()->attach($songIds);
        // attach function will attach an all the Song id that is sign by the '$singer' instance
        // so now it will add new data into 'singer_songs'

        // if you want to remove or detach the Song that is Sing by the Singer then we will use this
        // $singer->songs()->detach($songIds);
    }

    // function to get singer data base on Song id
    public function get_singer($id)
    {
        $song = Song::find($id);
        return $song->singers;
    }
}
