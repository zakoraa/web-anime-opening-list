@extends('layouts.app')

@section('content')

<section id="signup" class="bg-[#101820]  max-h-screen fixed w-full text-white">
    <img class="w-full object-cover min-h-screen z-0" src="{{ asset('storage/anime.webp') }}" alt="jujutsu" />
    <div class="absolute top-0 left-0 w-full h-full font-extrabold flex-col flex justify-center items-center px-5 lg:px-20">
        <div class="lg:w-2/3 w-full rounded-lg p-8 mt-5">
            <form action="{{ route('signup.process') }}" method="POST">
                @csrf
                <div class="lg:mb-10 mb-4">
                    <input type="text" id="username" name="name" class="w-full px-5 py-4 lg:px-5 lg:py-5 mb-6 rounded-3xl  focus:outline-none " placeholder="Username" required style="background-color: #0000009c;">
                </div>
                <div class="lg:mb-10 mb-4">
                    <input type="email" id="email" name="email" class="w-full px-5 py-4 lg:px-5 lg:py-5 mb-6 rounded-3xl  focus:outline-none " placeholder="Email" required style="background-color: #0000009c;">
                </div>
                <div class="lg:mb-10 mb-4">
                    <input type="password" id="password" name="password" class="w-full px-5 py-4 lg:px-5 lg:py-5 mb-6 rounded-3xl focus:outline-none " placeholder="Password" required style="background-color: #0000009c;">
                </div>
                <button type="submit" class="w-full rounded-3xl py-4 lg:py-5" style="background-color: #101820; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#374151';" onmouseout="this.style.backgroundColor='#101820';">
                    Sign Up
                </button>
            </form>
            <div class="mt-5">
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="px-6 py-4 bg-red-400 text-white flex justify-between rounded" id="myAlert">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        <p>{{session('error')}}</p>
                    </div>
                    <button class="text-red-100 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" onclick="closeAlert()">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                @endforeach
                @endif

                @if(session()->has('error'))
                <div class="px-6 py-4 bg-red-400 text-white flex justify-between rounded" id="myAlert">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        <p>{{session('error')}}</p>
                    </div>
                    <button class="text-red-100 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" onclick="closeAlert()">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                @endif

                @if(session()->has('success'))
                <div class="px-6 py-4 bg-green-400 text-white flex justify-between rounded" id="myAlert">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-6" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                        </svg>
                        <p>Success! This is a success alert—check it out!</p>
                    </div>
                    <button class="text-green-100 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" onclick="closeAlert()">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
    @include("components.navbar_auth")
    @include("components.footer_auth")
</section>

@endsection