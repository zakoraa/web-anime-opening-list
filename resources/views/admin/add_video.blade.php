@extends('admin.index')

@section('content')

<div class="mt-6 mx-auto text-black">
    <h1 class="font-bold text-xl text-center mb-4">Add Video Anime</h1>
    <form action="{{route('videos.create')}}" method="POST">
        @csrf
        @method("GET")

        <div class="mb-4">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="border w-full border-gray-300 rounded-md py-2 px-4" placeholder="Enter Title"><br>
            @error("title")
            <small class="text-red-500">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <label for="anime">Anime:</label>
            <input type="text" id="anime" placeholder="Enter Anime" name="anime" class="border w-full border-gray-300 rounded-md py-2 px-4"><br>
            @error("anime")
            <small class="text-red-500">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <label for="link_id">Link ID:</label>
            <input type="text" id="link_id" placeholder="Enter Link ID" name="link_id" class="border w-full border-gray-300 rounded-md py-2 px-4"><br>
            @error("link_id")
            <small class="text-red-500">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <label for="linkId">Thumbnail:</label>
            <input type="text" id="thumbnail" placeholder="Enter Thumbnail" name="thumbnail" class="border w-full border-gray-300 rounded-md py-2 px-4"><br>
            @error("thumbnail")
            <small class="text-red-500">{{$message}}</small>
            @enderror
        </div>

        <button type="submit" class="bg-[#374151] w-full text-white py-2 px-4 rounded-md hover:bg-[#101820]">Submit</button>
    </form>
</div>

@endsection