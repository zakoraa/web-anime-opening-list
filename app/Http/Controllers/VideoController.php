<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tableVideo()
    {
        $videos = Video::all();
        return view("admin/video_list", compact("videos"));
    }

    public function addVideo()
    {
        return view("admin/add_video");
    }

    public function updateTitle()
    {
        return view("admin/update_title");
    }

    public function updateAnime()
    {
        return view("admin/update_anime");
    }

    public function updateLinkID()
    {
        return view("admin/update_link_id");
    }
    public function updateThumbnail()
    {
        view("admin/update_thumbnail");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "title" => "required",
            "anime" => "required",
            "link_id" => "required",
            "thumbnail" => "required"
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data["title"] = $request->title;
        $data["anime"] = $request->anime;
        $data["link_id"] = $request->link_id;
        $data["thumbnail"] = $request->thumbnail;

        Video::create($data);

        return redirect()->route('video.list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
