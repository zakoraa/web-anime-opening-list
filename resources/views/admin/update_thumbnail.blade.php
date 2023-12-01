@extends('admin.index')

@section('content')

<div class="mt-6 mx-auto text-black">
    <h1 class="font-bold text-xl text-center mb-4">Update Thumbnail</h1>
    <form>
        <input type="text" class="w-full border border-gray-300 rounded-md py-2 px-4 mb-4" placeholder="Enter New Thumbnail">
        <button type="submit" class="w-full bg-[#374151] text-white py-2 px-4 rounded-md hover:bg-[#101820]">Submit</button>
    </form>
</div>

@endsection