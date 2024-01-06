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
    public function index()
    {
        $videos = Video::all();
        return view("admin/video_table", compact("videos"));
    }

    function showAllVideos()
    {
        $videos  = Video::all();
        return view("/home", compact("videos"));
    }

    public function showSelectedVideo($id)
    {
        $video = Video::find($id);
        $videos = Video::all();
        return view("watch", compact("video", "videos"));
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

        return redirect(route("videos.index"))->with("success", "Video created successfully");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view("admin/update_video", ["video" => $video]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {

        $values = array(
            "title" => $request->title,
            "anime" => $request->anime,
            "link_id" => $request->link_id,
            "thumbnail" => $request->thumbnail
        );

        Video::where("id", $video->id)->update($values);

        return redirect(route("videos.index"))->with("success", "Video updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        Video::find($video->id)->delete();
        return redirect(route("videos.index"))->with("success", "Video deleted successfully");
    }

    public function addVideo()
    {
        return view("admin/add_video");
    }
}
