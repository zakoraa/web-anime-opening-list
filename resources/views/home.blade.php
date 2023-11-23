@extends('layouts.app')

@section('content')
<section id="header">
    <div class="min-h-screen w-full relative text-white">
        <img class="w-full min-h-screen object-cover" src="{{ asset('storage/jujutsu.gif') }}" alt="jujutsu" />
        <div class="absolute top-0 left-0 w-full h-full bg-[#0000006c] font-extrabold  flex-col flex justify-center items-center lg:items-start px-10 lg:px-20">
            <div class="text-4xl text-center lg:text-7xl mb-10 lg:mb-10" data-aos="fade-up" data-aos-duration="3000">
                Explore Your World
            </div>
            <div class="text-4xl text-center lg:text-7xl mb-10 lg:mb-10" data-aos="fade-up" data-aos-duration="3000">
                Find Your Favorite Anime
            </div>
            <div class="text-4xl text-center lg:text-7xl" data-aos="fade-up" data-aos-duration="3000">
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

        <div class="bg-white h-96 mt-16 overflow-visible" style="border-top-left-radius: 100px; border-top-right-radius: 100px;">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 p-4">

                <div class="max-w-sm bg-white border rounded-3xl shadow dark:bg-gray-800 relative" style="top: -130px; height: 510px;" data-aos="slide-up" data-aos-duration="1000">
                    <div class="object-cover" style="height: 250px;">
                        <img class="rounded-t-3xl h-full w-full object-cover" src="https://akcdn.detik.net.id/visual/2022/02/05/attack-on-titan_169.png?w=650" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Attack on Titan Season 2 - Opening | Shinzou wo Sasageyo!</h5>
                        <a href="/watch" class="inline-flex items-center justify-center absolute bottom-0 left-1/2 transform -translate-x-1/2 px-4 py-3 mb-10 text-sm font-medium text-white bg-[#0869D4] rounded-3xl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-800 hover:translate-y-[-5px] transition duration-300 ease-in-out hover:bg-blue-800">
                            Watch Opening
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white border rounded-3xl shadow dark:bg-gray-800 relative" style="top: -130px; height: 510px;" data-aos="slide-up" data-aos-duration="1000">
                    <div class="object-cover" style="height: 250px;">
                        <img class="rounded-t-3xl h-full w-full object-cover" src="https://fin.co.id/upload/786721f5e4adae9d7ef09758e253a5b8.jpg" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Naruto Shippuden - Opening 6 | Sign</h5>
                        <a href="#" class="inline-flex items-center justify-center absolute bottom-0 left-1/2 transform -translate-x-1/2 px-4 py-3 mb-10 text-sm font-medium text-white bg-[#0869D4] rounded-3xl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-800 hover:translate-y-[-5px] transition duration-300 ease-in-out hover:bg-blue-800">
                            Watch Opening
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white border rounded-3xl shadow dark:bg-gray-800 relative" style="top: -130px; height: 510px;" data-aos="slide-up" data-aos-duration="1000">
                    <div class="object-cover" style="height: 250px;">
                        <img class="rounded-t-3xl h-full w-full object-cover" src="https://i.ytimg.com/vi/yu12tTrkJ-g/maxresdefault.jpg" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Moshimo - Daisuke | Naruto Shippuden OP 12</h5>
                        <a href="#" class="inline-flex items-center justify-center absolute bottom-0 left-1/2 transform -translate-x-1/2 px-4 py-3 mb-10 text-sm font-medium text-white bg-[#0869D4] rounded-3xl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-800 hover:translate-y-[-5px] transition duration-300 ease-in-out hover:bg-blue-800">
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