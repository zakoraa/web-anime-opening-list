@extends('layouts.app')

@section('content')

<section id="signup" class="bg-[#101820]  max-h-screen fixed w-full text-white">
    <img class="w-full object-cover min-h-screen z-0" src="{{ asset('storage/anime.webp') }}" alt="jujutsu" />
    <div class="absolute top-0 left-0 w-full h-full font-extrabold flex-col flex justify-center items-center px-5 lg:px-20">
        <div class="lg:w-2/3 w-full rounded-lg p-8 mt-5">
            <form action="{{ route('login.process') }}" method="POST">
                @csrf
                <div class="mb-10">
                    <input type="email" id="email" name="email" class="w-full px-5 py-4 lg:px-5 lg:py-6 mb-6 rounded-3xl  focus:outline-none " placeholder="Email" required style="background-color: #0000009c;">
                </div>
                <div class="mb-10">
                    <input type="password" id="password" name="password" class="w-full px-5 py-4 lg:px-5 lg:py-6 mb-6 rounded-3xl focus:outline-none " placeholder="Password" required style="background-color: #0000009c;">
                </div>
                <button type="submit" class="w-full rounded-3xl py-4 lg:py-6" style="background-color: #101820; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#374151';" onmouseout="this.style.backgroundColor='#101820';">
                    Login
                </button>
            </form>
            <div class="mt-5">
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="bg-red-100 border border-red-400 text-red-700  px-4 py-3 rounded-xl relative" role="alert" id="myAlert">
                    <strong class="font-bold">Login Failed!</strong>
                    <span class="block font-extralight sm:inline">{{$error}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" onclick="closeAlert()">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
                @endforeach
                @endif

                @if(session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl relative" role="alert" id="myAlert">
                    <strong class="font-bold">Failed!</strong>
                    <span class="block font-extralight sm:inline">{{session('error')}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" onclick="closeAlert()">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
                @endif

                @if(session()->has('success'))
                <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded-xl relative" role="alert" id="myAlert">
                    <strong class="font-bold">Login Success!</strong>
                    <span class="block font-extralight sm:inline">{{session('success')}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-blue-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" onclick="closeAlert()">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
                @endif
            </div>
        </div>
    </div>
    @include("components.navbar_auth")
    @include("components.footer_auth")
</section>

@endsection