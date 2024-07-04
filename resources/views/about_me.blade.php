@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen py-12 bg-gray-100 sm:px-6 lg:px-8">
    <div data-aos="fade-up" data-aos-duration="1000" class="bg-white shadow-lg rounded-lg overflow-hidden max-w-lg w-full mx-auto">
        <div class="flex items-center justify-between p-6 bg-[#101820] overflow-hidden">
            <div class="flex-shrink-0" data-aos="fade-up" data-aos-duration="1500">
                <img class="w-32 h-32 object-cover rounded-full" src="{{ asset('storage/me.jpeg') }}" alt="Me">
            </div>
            <div class="ml-6" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="md:text-4xl text-2xl font-bold text-white">Hello, I’m <span class="text-blue-300">Muhammad Rafli Silehu</span></h1>
                <p class="mt-2 md:text-xl text-base  text-gray-200">Mobile Developer</p>
            </div>
        </div>
        <div class="p-6" data-aos="fade-up" data-aos-duration="2000">
            <p class="mt-2 text-gray-600 text-justify">I am Muhammad Rafli Silehu, a
                4th semester student majoring in
                Informatics at Universitas
                Muhammadiyah Surakarta. I
                have an interest as a Mobile
                Developer especially Flutter
                framework on programming
                language Dart .</p>
            <div class="mt-6" data-aos="fade-up" data-aos-duration="2300">
                <a href="https://linktr.ee/raflisilehu" target="_blank" class="inline-flex items-center px-4 py-2 bg-[#101820] text-white text-sm font-medium rounded-md hover:bg-[#0d335a] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-[#0d335a]">GET IN TOUCH!</a>
            </div>
            <div class="mt-6" data-aos="fade-up" data-aos-duration="2500">
                <p class="text-gray-500">Connect with me :</p>
                <div class="flex space-x-4 mt-2">
                    <a href="https://www.linkedin.com/in/raflisilehu/" target="_blank" class="text-gray-400 hover:text-[#101820]">
                        <span class="sr-only">LinkedIn</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                    <a href="https://github.com/zakoraa" target="_blank" class="text-gray-400 hover:text-[#101820]">
                        <span class="sr-only">GitHub</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .5c-6.627 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.11.793-.26.793-.577v-2.05c-3.338.726-4.033-1.415-4.033-1.415-.546-1.387-1.333-1.757-1.333-1.757-1.087-.744.083-.729.083-.729 1.205.084 1.838 1.237 1.838 1.237 1.07 1.834 2.809 1.305 3.494.998.107-.774.418-1.305.762-1.605-2.665-.303-5.466-1.332-5.466-5.931 0-1.311.47-2.381 1.237-3.221-.124-.303-.536-1.524.118-3.176 0 0 1.008-.322 3.3 1.23.957-.266 1.983-.399 3.004-.404 1.02.005 2.047.138 3.004.404 2.291-1.553 3.296-1.23 3.296-1.23.655 1.653.243 2.873.119 3.176.77.84 1.237 1.91 1.237 3.221 0 4.609-2.803 5.625-5.475 5.922.429.37.81 1.096.81 2.209v3.283c0 .32.192.693.801.575 4.765-1.589 8.2-6.085 8.2-11.387 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/raflisilehu_" target="_blank" class="text-gray-400 hover:text-[#101820]">
                        <span class="sr-only">Instagram</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@raflisilehu" target="_blank" class="text-gray-400 hover:text-[#101820]">
                        <span class="sr-only">YouTube</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186c-.288-1.084-1.137-1.937-2.215-2.222-1.955-.523-9.787-.523-9.787-.523s-7.832 0-9.787.523c-1.079.285-1.928 1.137-2.215 2.222-.525 1.958-.525 6.052-.525 6.052s0 4.094.525 6.052c.288 1.084 1.137 1.937 2.215 2.222 1.955.523 9.787.523 9.787.523s7.832 0 9.787-.523c1.079-.285 1.928-1.137 2.215-2.222.525-1.958.525-6.052.525-6.052s0-4.094-.525-6.052zm-14.498 8.814v-6.5l6.5 3.25-6.5 3.25z" />
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection