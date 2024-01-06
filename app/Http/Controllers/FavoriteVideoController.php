<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteVideoController extends Controller
{

    public function showFavoriteVideos()
    {
        $user = User::find(Auth::user()->id);

        $favoriteVideos = $user->video()->get();

        return view('favorite_videos', compact('favoriteVideos'));
    }

    public function addToFavorites(Request $request, $videoId)
    {
        $user = User::find(Auth::user()->id);
        $video = Video::findOrFail($videoId);

        $user->video()->attach($video);

        return response()->json(['message' => 'Video added to favorites']);
    }

    public function removeFromFavorites(Request $request, $videoId)
    {
        $user = User::find(Auth::user()->id);
        $video = Video::findOrFail($videoId);

        $user->video()->detach($video);

        return response()->json(['message' => 'Video removed from favorites']);
    }

    public function checkFavoriteStatus($videoId)
    {
        $user = User::find(Auth::user()->id);

        if ($user && $user->video()->where('video_id', $videoId)->exists()) {
            return response()->json(['isFavorite' => true]);
        }

        return response()->json(['isFavorite' => false]);
    }
}
