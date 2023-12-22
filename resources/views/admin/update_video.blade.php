@extends('admin.index')

@section('content')

<div class="mt-6 mx-auto text-black">
    <h1 class="font-bold text-xl text-center mb-4">Update Video</h1>
    <form action="{{ route('videos.update', $video->id) }}" onsubmit="return confirm('Are you sure you want to update this video data?');" method="POST">
        @csrf
        @method('PUT')

        <label for="newTitle" class="block mb-2 mt-4">New Title:</label>
        <input type="text" id="newTitle" name="title" class="w-full border border-gray-300 rounded-md py-2 px-4" value="{{$video->title}}" placeholder="Enter New Title">
        @error('title')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
        <label for="newAnime" class="block mb-2 mt-4">New Anime:</label>
        <input type="text" id="newAnime" name="anime" class="w-full border border-gray-300 rounded-md py-2 px-4" value="{{$video->anime}}" placeholder="Enter New Anime">
        @error('anime')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
        <label for="newLinkID" class="block mb-2 mt-4">New Link ID:</label>
        <input type="text" id="newLinkID" name="link_id" class="w-full border border-gray-300 rounded-md py-2 px-4" value="{{$video->link_id}}" placeholder="Enter New Link ID">
        @error('link_id')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
        <label for="newThumbnail" class="block mb-2 mt-4">New Thumbnail:</label>
        <input type="text" id="newThumbnail" name="thumbnail" class="w-full border border-gray-300 rounded-md py-2 px-4" value="{{$video->thumbnail}}" placeholder="Enter New Thumbnail">
        @error('thumbnail')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
        <button type="submit" class="w-full mt-4 bg-[#374151] text-white py-2 px-4 rounded-md hover:bg-[#101820]">Update</button>
    </form>

</div>

@endsection