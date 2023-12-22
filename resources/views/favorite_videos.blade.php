@extends('layouts.app')

@section('content')
<h1 class="text-white font-semibold text-5xl text-center mt-5 mb-16">Your Favorite Movies</h1>

<div class="wrap gap-x-5 mx-5 grid lg:grid-cols-4 grid-cols-1 text-center items-center justify-center">
    @foreach($favoriteVideos as $video)
    <div class="lg:w-72 w-full" data-aos="fade-up" data-aos-duration="1000">
        <div class="relative py-4">
            <a href="{{ url('watch', $video->id) }}" class="relative block hover:scale-105 transition-transform duration-300 transform">
                <img class="rounded-3xl h-52 object-cover w-full" src="{{ $video->thumbnail }}" />
                <div class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-[#101820b7] to-transparent">
                </div>
                <h1 class="absolute inset-x-0 bottom-0 h-full flex items-end text-center justify-center text-white text-xl font-bold pb-8 px-5">{{ $video->anime }} - {{ $video->title }}</h1>
            </a>
        </div>
    </div>
    @endforeach
</div>

@endsection