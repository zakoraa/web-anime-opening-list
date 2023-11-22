@extends('layouts.app')

@section('content')
<section id="header">
    <div class="min-h-screen w-full relative text-white">
        <img class="w-full h-full object-cover" src="{{ asset('storage/jujutsu.gif') }}" alt="jujutsu" />
        <div class="absolute top-0 left-0 w-full h-full bg-[#0000006c] font-extrabold  flex-col flex justify-center items-start px-20">
            <div class="text-7xl mb-10" data-aos="fade-right" data-aos-duration="1500">
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
</section>


<section id="trending">
    <div class="bg-[#101820] w-full text-white text-center ">
        <div class="p-20 text-5xl font-extrabold">
            <div class="mb-5">Top 3 </div>
            <div class="mb-5">Most Popular</div>
            <div class=" mb-16">Anime Openings</div>
        </div>

        <div class="bg-white rounded-t-3xl h-96 mt-16 overflow-visible">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 p-4">

                <div class="max-w-sm bg-white border rounded-lg shadow dark:bg-gray-800 relative" style="top: -130px;" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://akcdn.detik.net.id/visual/2022/02/05/attack-on-titan_169.png?w=650" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Attack on Titan Season 2 - Opening | Shinzou wo Sasageyo!</h5>
                        </a>
                        <a href="#" class="inline-flex items-center px-3 py-2 mb-8 text-sm font-medium text-center text-white bg-[#0869D4] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-[#0869D4] dark:focus:ring-blue-800">
                            Watch Opening
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-white border rounded-lg shadow dark:bg-gray-800 relative" style="top: -130px;" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://akcdn.detik.net.id/visual/2022/02/05/attack-on-titan_169.png?w=650" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Attack on Titan Season 2 - Opening | Shinzou wo Sasageyo!</h5>
                        </a>
                        <a href="#" class="inline-flex items-center px-3 py-2 mb-8 text-sm font-medium text-center text-white bg-[#0869D4] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-[#0869D4] dark:focus:ring-blue-800">
                            Watch Opening
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-white border rounded-lg shadow dark:bg-gray-800 relative" style="top: -130px;" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://akcdn.detik.net.id/visual/2022/02/05/attack-on-titan_169.png?w=650" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Attack on Titan Season 2 - Opening | Shinzou wo Sasageyo!</h5>
                        </a>
                        <a href="#" class="inline-flex items-center px-3 py-2 mb-8 text-sm font-medium text-center text-white bg-[#0869D4] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-[#0869D4] dark:focus:ring-blue-800">
                            Watch Opening
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection