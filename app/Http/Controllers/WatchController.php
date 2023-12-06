<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('watch', compact('videos'));
    }
    public function show($id)
    {
        $video = Video::find($id);
        return view('watch', compact('video'));
    }
}
