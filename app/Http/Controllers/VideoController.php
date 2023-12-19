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

        return redirect(route('video_table'));
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
        return view('admin/update_video', ['video' => $video]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        Video::where('id', $video->id)->update($request->all());
        return redirect(route("video_table"))->with("Success", "Video updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        Video::where('id', $video->id)->delete();
        return redirect(route("video_table"))->with("Success", "Video deleted successfully");
    }
}
