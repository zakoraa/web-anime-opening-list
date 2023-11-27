<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchController extends Controller
{
    function index()
    {
        return view("/watch");
    }
}
