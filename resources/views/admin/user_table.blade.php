@extends('admin/index')

@section('content')

<div class="flex-1">
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2 border">Id</th>
                    <th class="px-4 py-2 border">Username</th>
                    <th class="px-4 py-2 border">Email</th>
                    <th class="px-4 py-2 border">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($users as $item)
                <tr>
                    <td class="border px-4 py-2">{{$item["id"]}}</td>
                    <td class="border px-4 py-2">{{$item["name"]}}</td>
                    <td class="border px-4 py-2">{{$item["email"]}}</td>
                    <td class="border px-4 py-2 flex justify-center">
                        <a a href="{{ url('admin/delete-user', $item['id']) }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection