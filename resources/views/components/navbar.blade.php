<!-- bg-[#101820] -->
<nav id="navbar" class="top-0 left-0 h-24 text-white fixed w-full z-10 ease-in-out transition-colors"  data-aos="fade-down" data-aos-duration="1000">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-16 h-full  flex items-center">
      <div class="relative flex items-center me-2">
        <img class="rounded-full border-2 border-white" src="{{ asset('storage/Z.jpg') }}" alt="hallo" width="70px">
      </div>

      <div class="hidden sm:flex items-center justify-evenly w-full ">
        <h1 class="font-semibold relative cursor-pointer"><span class="group inline-block">
            Home
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
          </span></h1>
        <h1 class="font-semibold relative cursor-pointer"><span class="group inline-block">
            Trending Now
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
          </span></h1>
        <h1 class="font-semibold relative cursor-pointer"><span class="group inline-block">
            Top Anime
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
          </span></h1>
        <h1 class="font-semibold relative cursor-pointer"><span class="group inline-block">
            About
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
          </span></h1>
        <h1 class="font-semibold relative cursor-pointer"><span class="group inline-block">
            Logout
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
          </span></h1>
      </div>

      <!-- Mobile display -->
      <div class="sm:hidden ml-auto px-5">
        <button id="mobile-menu-toggle">
          <div class="space-y-2">
            <span class="block w-8 h-0.5 bg-white"></span>
            <span class="block w-8 h-0.5 bg-white"></span>
            <span class="block w-5 h-0.5 bg-white"></span>
          </div>
        </button>
      </div>

      <!-- <div class="sm:hidden lg:hidden md:hidden" id="mobile-menu">
      <div class="flex flex-col items-center py-4">
        <a href="#" class="text-white block py-2">Home</a>
        <a href="#" class="text-white block py-2">Trending Now</a>
        <a href="#" class="text-white block py-2">Top Anime</a>
        <a href="#" class="text-white block py-2">About</a>
      </div> -->
    </div>

    </div>

  </nav>