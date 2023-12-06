@extends('admin.index')

@section('content')

<div class="mt-6 mx-auto text-black">
    <h1 class="font-bold text-xl text-center mb-4">Update Video</h1>
    <form action="{{ route('update.video', $video->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="newTitle" class="block mb-2">New Title:</label>
        <input type="text" id="newTitle" name="title" class="w-full border border-gray-300 rounded-md py-2 px-4 mb-4" value="{{$video->title}}" placeholder="Enter New Title">

        <label for="newAnime" class="block mb-2">New Anime:</label>
        <input type="text" id="newAnime" name="anime" class="w-full border border-gray-300 rounded-md py-2 px-4 mb-4" value="{{$video->anime}}" placeholder="Enter New Anime">

        <label for="newLinkID" class="block mb-2">New Link ID:</label>
        <input type="text" id="newLinkID" name="link_id" class="w-full border border-gray-300 rounded-md py-2 px-4 mb-4" value="{{$video->link_id}}" placeholder="Enter New Link ID">

        <label for="newThumbnail" class="block mb-2">New Thumbnail:</label>
        <input type="text" id="newThumbnail" name="thumbnail" class="w-full border border-gray-300 rounded-md py-2 px-4 mb-4" value="{{$video->thumbnail}}" placeholder="Enter New Thumbnail">

        <button type="submit" class="w-full bg-[#374151] text-white py-2 px-4 rounded-md hover:bg-[#101820]">Update</button>
    </form>

</div>

@endsection