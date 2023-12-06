<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $videos  = Video::all();
        return view("/home", compact("videos"));
    }
}
