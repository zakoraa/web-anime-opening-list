@extends('layouts.app')

@section('content')

<section id="signup" class="bg-[#101820]  max-h-screen fixed w-full text-white">
    <img class="w-full object-cover min-h-screen z-0" src="{{ asset('storage/anime.webp') }}" alt="jujutsu" />
    <div class="absolute top-0 left-0 w-full h-full font-extrabold flex-col flex justify-center items-center px-5 lg:px-20">
        <div class="lg:w-2/3 w-full rounded-lg p-8 mt-5">
            <form action="{{ route('signup.process') }}" method="POST">
                @csrf
                <div class="lg:mb-12 mb-7">
                    <input type="text" id="username" name="name" class="w-full px-5 py-4 lg:px-5 lg:py-5 rounded-3xl mb-2  focus:outline-none " placeholder="Username" required style="background-color: #0000009c;">
                    @error('name')
                    <p class="ms-3 text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="lg:mb-12 mb-7">
                    <input type="email" id="email" name="email" class="w-full px-5 py-4 lg:px-5 lg:py-5 rounded-3xl mb-2  focus:outline-none " placeholder="Email" required style="background-color: #0000009c;">
                    @error('email')
                    <p class="ms-3 text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="lg:mb-12 mb-7">
                    <input type="password" id="password" name="password" class="w-full px-5 py-4 lg:px-5 lg:py-5 rounded-3xl mb-2 focus:outline-none " placeholder="Password" required style="background-color: #0000009c;">
                    @error('password')
                    <p class="ms-3 text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="w-full rounded-3xl py-4 lg:py-5" style="background-color: #101820; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#374151';" onmouseout="this.style.backgroundColor='#101820';">
                    Sign Up
                </button>
            </form>
        </div>
    </div>
    @include("components.navbar_auth")
    @include("components.footer_auth")
</section>

@endsection