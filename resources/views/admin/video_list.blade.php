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
                        <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">Sasageyo</td>
                    <td class="border px-4 py-2">Attack On Titan</td>
                    <td class="border px-4 py-2">LKP-vZvjbh8?si=tdGQrx2dTebkk_PM</td>
                    <td class="border px-4 py-2 flex justify-center">
                        <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection