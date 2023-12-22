@extends('layouts.app')

@section('content')

<section id="signup" class="bg-[#101820]  max-h-screen fixed w-full text-white">
    <img class="w-full object-cover min-h-screen z-0" src="{{ asset('storage/anime.webp') }}" alt="jujutsu" />
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
    <div class="absolute top-0 left-0 w-full h-full font-extrabold flex-col flex justify-center items-center px-5 lg:px-20">
        <div class="lg:w-2/3 w-full rounded-lg p-8 mt-5">
            <form action="{{ route('login.process') }}" method="POST">
                @csrf
                <div class="mb-10">
                    <input type="email" id="email" name="email" class="w-full px-5 py-4 lg:px-5 lg:py-6 mb-6 rounded-3xl  focus:outline-none " placeholder="Email" required style="background-color: #0000009c;">
                    @error('email')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10">
                    <input type="password" id="password" name="password" class="w-full px-5 py-4 lg:px-5 lg:py-6 mb-6 rounded-3xl focus:outline-none " placeholder="Password" required style="background-color: #0000009c;">
                    @error('password')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="w-full rounded-3xl py-4 lg:py-6" style="background-color: #101820; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#374151';" onmouseout="this.style.backgroundColor='#101820';">
                    Login
                </button>
            </form>
            <div class="mt-5">
                @if(session('error'))
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
            </div>
        </div>
    </div>
    @include("components.navbar_auth")
    @include("components.footer_auth")
</section>

@endsection