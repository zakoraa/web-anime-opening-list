@extends('layouts.app')

@section('content')

<section id="watch" class="bg-[#101820] text-white">
    <div class="min-w-screen min-h-screen lg:flex relative">
        <div class="m-10" style="flex: 2;">
            <div class="video-wrapper flex justify-start items-center mb-5">
                <div class="aspect-video  iframe-container w-full relative">
                    <iframe class="shadow-slate-700 shadow-2xl rounded-lg absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{$video['link_id']}}" allowfullscreen title="YouTube Video"></iframe>
                </div>
            </div>
            <h1 class="lg:text-3xl text-xl mb-5">{{$video['anime']}} - {{$video['title']}}</h1>
            <div class="lg:flex-row flex flex-col-reverse">
                <h1 class="text-lg rounded-2xl bg-slate-800 px-5 py-2 inline-block me-5">Anime : {{$video['anime']}}</h1>
                <img id="favoriteImg" onclick="toggleLike(`{{ $video['id'] }}`)" class="cursor-pointer lg:mb-0 mb-5" src="{{ asset('storage/favorite_white.png') }}" alt="like" height="25" width="45" />
            </div>
        </div>
        <div class="flex  border border-gray-500 flex-col bg-[#101820] rounded-2xl shadow-lg my-10 lg:me-5 lg:w-96 m-5" style=" height: 85vh;">
            <div class="h-28 rounded-t-2xl bg-slate-800 p-5 flex items-center justify-center">
                <h1 class="text-lg font-semibold">Recommendation video</h1>
            </div>
            <div class="h-full overflow-y-auto pb-5">
                @foreach($videos->shuffle() as $item)
                <a href="{{ url('watch', $item['id']) }}" class="flex hover:bg-slate-700 hover:cursor-pointer">
                    <div class="relative my-2 ps-4">
                        <p class="absolute bottom-0 right-0 rounded-md bg-[#000000cc] text-white px-4 py-1 m-1" style="font-size: 8px;">play</p>
                        <img class="rounded-md" src="{{$item['thumbnail']}}" alt="title" style="max-width: 120px; height: auto;">
                    </div>
                    <div class="p-4">
                        <h1 class=" hover:underline text-xs font-semibold line-clamp-2">
                            {{$item['anime']}} - {{$item['title']}}
                        </h1>
                    </div>
                </a>
                @endforeach


            </div>
        </div>
    </div>
</section>
@endsection