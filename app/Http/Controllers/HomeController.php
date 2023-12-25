<?php

namespace App\Http\Controllers;

use App\Models\Video;

class HomeController extends Controller
{
    function index()
    {
        $videos  = Video::all();
        return view("/home", compact("videos"));
    }
}
