@extends('admin/index')

@section('content')

<div class="flex-1 bg-white">
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Title</th>
                    <th class="px-4 py-2 border">Anime</th>
                    <th class="px-4 py-2 border">Link ID</th>
                    <th class="px-4 py-2 border">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">Sasageyo</td>
                    <td class="border px-4 py-2">Attack On Titan</td>
                    <td class="border px-4 py-2">LKP-vZvjbh8?si=tdGQrx2dTebkk_PM</td>
                    <td class="border px-4 py-2 flex justify-center">
                        <button onclick="togglePopup('updateVideo')" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-7 rounded focus:outline-none focus:shadow-outline">Edit</button>
                    </td>
                    <td class="border px-4 py-2 flex justify-center">
                        <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">Sasageyo</td>
                    <td class="border px-4 py-2">Attack On Titan</td>
                    <td class="border px-4 py-2">LKP-vZvjbh8?si=tdGQrx2dTebkk_PM</td>
                    <td class="border px-4 py-2 flex justify-center">
                        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-7 rounded focus:outline-none focus:shadow-outline">Edit</button>
                    </td>
                    <td class="border px-4 py-2 flex justify-center">
                        <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="updateVideo" class="flex-col hidden text-black fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-8 rounded-lg shadow-2xl popup">
        <div class="flex flex-col gap-2">
            <div class="flex justify-end mb-3">
                <svg class="cursor-pointer svg-icon text-gray-600 hover:text-gray-800 h-6 w-6 mt-2 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" onclick="togglePopup('updateVideo')">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            <a class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600" href="{{ route('update-title') }}">Update Video Title</a>
            <a class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600" href="{{ route('update-anime') }}">Update Video Anime</a>
            <a class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600" href="{{ route('update-linkID') }}">Update Video Link ID</a>
        </div>
    </div>

</div>

@endsection