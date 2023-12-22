<?php

namespace App\Http\Controllers;

use App\Models\Video;

class WatchController extends Controller
{
    public function index($id)
    {
        $video = Video::find($id);
        $videos = Video::all();
        return view("watch", compact("video", "videos"));
    }
}
