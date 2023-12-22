@extends('admin/index')

@section('content')

<div class="flex-1 h-screen overflow-y-scroll">
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
                    <td class="border px-4 py-2 text-sm">{{$item["link_id"]}}</td>
                    <td class="border px-4 py-2">
                        <div class="flex justify-center ">
                            <img src="{{$item['thumbnail']}}" alt="thumbnail" width="150">
                        </div>
                    </td>
                    <td class="border px-4 py-2 flex justify-center">
                        <a href="{{ route('videos.edit', $item['id']) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-7 rounded focus:outline-none focus:shadow-outline">Edit</a>
                    </td>
                    <td class="border px-4 py-2 flex justify-center">
                        <form action="{{ route('videos.destroy', $item['id']) }}" method="POST" onsubmit="return confirm('Are you sure to delete this video?');" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if(session('success'))
    <div id="popup-modal" tabindex="-1" class="{{ session('success') ? 'flex' : 'hidden' }} fixed inset-0 z-50 items-center justify-center bg-gray-900 bg-opacity-50">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button id="closeModal" type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center flex flex-col justify-center items-center">
                    <dotlottie-player src="https://lottie.host/21ada2d0-b792-418a-918d-9c16692b6512/P1wwPYejCq.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                    <h3 class="mb-5 text-lg font-normal text-white">{{ session('success') }}</h3>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection