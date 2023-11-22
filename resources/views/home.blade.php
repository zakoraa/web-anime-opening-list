@extends('layouts.app')

@section('content')
<div class="min-h-screen w-full relative text-white">
    <img class="w-full h-full object-cover" src="{{ asset('storage/jujutsu.gif') }}" alt="jujutsu" />
    <div class="absolute top-0 left-0 w-full h-full bg-[#0000006c] font-extrabold  flex-col flex justify-center items-start px-20" >
        <div class="text-7xl mb-10" data-aos="fade-right" data-aos-duration="1000">
            Explore Your World
        </div>
        <div class="text-7xl mb-10" data-aos="fade-right" data-aos-duration="2000">
            Find Your Favorite Anime
        </div>
        <div class="text-7xl" data-aos="fade-right" data-aos-duration="3000">
            Enjoy Your Life
        </div>
    </div>

</div>
@endsection