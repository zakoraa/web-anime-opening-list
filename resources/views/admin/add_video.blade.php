@extends('admin.index')

@section('content')

<div class="mt-6 mx-auto text-black">
    <h1 class="font-bold text-xl text-center mb-4">Add Anime</h1>
    <form >
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="border w-full border-gray-300 rounded-md py-2 px-4 mb-4" placeholder="Enter Title"><br>
        <label for="anime" >Anime:</label>
        <input type="text" id="anime" placeholder="Enter Anime" name="anime" class="border w-full border-gray-300 rounded-md py-2 px-4 mb-4"><br>
        <label for="linkId" >Link ID:</label>
        <input type="text" id="linkId" placeholder="Enter Link ID" name="linkId" class="border w-full border-gray-300 rounded-md py-2 px-4 mb-4"><br>
        <label for="linkId" >Thumbnail:</label>
        <input type="text" id="thumbnail" placeholder="Enter Thumbnail" name="thumbnail" class="border w-full border-gray-300 rounded-md py-2 px-4 mb-4"><br>
        <button type="submit" class="bg-[#374151] w-full text-white py-2 px-4 rounded-md hover:bg-[#101820]">Submit</button>
    </form>
</div>

@endsection