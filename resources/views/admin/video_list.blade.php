@extends('admin/index')

@section('content')

<div class="flex-1 ">
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2 border">Id</th>
                    <th class="px-4 py-2 border">Title</th>
                    <th class="px-4 py-2 border">Anime</th>
                    <th class="px-4 py-2 border">Link ID</th>
                    <th class="px-4 py-2 border">Thumbnail</th>
                    <th class="px-4 py-2 border">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($videos as $item)
                <tr>
                    <td class="border px-4 py-2">{{$item["id"]}}</td>
                    <td class="border px-4 py-2">{{$item["title"]}}</td>
                    <td class="border px-4 py-2">{{$item["anime"]}}</td>
                    <td class="border px-4 py-2">{{$item["link_id"]}}</td>
                    <td class="border px-4 py-2">
                        <div class="flex justify-center ">
                            <img src="{{$item['thumbnail']}}" alt="thumbnail" width="150">
                        </div>
                    </td>
                    <td class="border px-4 py-2 flex justify-center">
                        <a href="{{ url('admin/update-video', $item['id']) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-7 rounded focus:outline-none focus:shadow-outline">Edit</a>
                    </td>
                    <td class="border px-4 py-2 flex justify-center">
                        <a href="{{ url('admin/delete-video', $item['id']) }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</a>
                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>


    </div>
</div>

@endsection