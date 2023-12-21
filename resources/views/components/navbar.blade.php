<!-- bg-[#101820] -->
<nav id="navbar" class="top-0 left-0 h-24 text-white fixed w-full z-50 ease-in-out transition-colors" data-aos="fade-down" data-aos-duration="1000">
  <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-16 h-full  flex items-center">
    <a href="https://github.com/zakoraa" class="relative flex items-center me-2">
      <img class="rounded-full border-2 border-white" src="{{ asset('storage/Z.jpg') }}" alt="hallo" width="70px">
    </a>

    <div class="hidden sm:flex items-center justify-evenly w-full ">
      <a href="#" class="font-semibold relative cursor-pointer"><span class="group inline-block">
          Home
          <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
        </span></a>
      <a href="#top_anime" class="font-semibold relative cursor-pointer"><span class="group inline-block">
          Top Anime
          <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
        </span></a>
      <a href="#for_you" class="font-semibold relative cursor-pointer"><span class="group inline-block">
          For You
          <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
        </span></a>
      <a href="/settings" class="font-semibold relative cursor-pointer"><span class="group inline-block">
          Settings
          <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
        </span></a>
      @auth
      <a href="{{ route('logout') }}" class="font-semibold relative cursor-pointer"><span class="group inline-block">
          <div class="flex justify-center items-center"> Logout <svg class="ms-2" fill="#FFFFFF" height="18px" width="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-38.5 -38.5 461.97 461.97" xml:space="preserve" stroke="#FFFFFF" stroke-width="20.403463000000002" transform="rotate(0)">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="2.309826"></g>
              <g id="SVGRepo_iconCarrier">
                <g>
                  <g id="Sign_Out">
                    <path d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03 C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03 C192.485,366.299,187.095,360.91,180.455,360.91z"></path>
                    <path d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279 c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179 c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z"></path>
                  </g>
                  <g> </g>
                  <g> </g>
                  <g> </g>
                  <g> </g>
                  <g> </g>
                  <g> </g>
                </g>
              </g>
            </svg></div>
          <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
        </span>
      </a>
      @endauth
    </div>

    <div class="sm:hidden ml-auto px-5">
      <button id="mobile-menu-toggle" onclick="toggleMobileMenu()">
        <div class="space-y-2">
          <span class="block w-8 h-0.5 bg-white"></span>
          <span class="block w-8 h-0.5 bg-white"></span>
          <span class="block w-5 h-0.5 bg-white"></span>
        </div>
      </button>
    </div>

    <div class="-translate-y-96 -z-10 absolute top-0 left-0 bg-[#101820] mt-16 min-w-full fixed-top transition duration-500 ease-in-out transform" id="mobile-menu">
      <div class="flex flex-col items-center py-4">
        <a href="#" class="relative cursor-pointer mb-5"><span class="group inline-block">
            Home
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
          </span></a>
        <a href="#top_anime" class="relative cursor-pointer mb-5"><span class="group inline-block">
            Top Anime
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
          </span></a>
        <a href="#for_you" class="relative cursor-pointer mb-5"><span class="group inline-block">
            For You
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
          </span></a>
        <a href="/settings" class="relative cursor-pointer mb-5"><span class="group inline-block">
            Settings
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
          </span></a>
        @auth
        <a href="{{ route('logout') }}" class="relative cursor-pointer"><span class="group inline-block">
            <div class="flex justify-center items-center"> Logout <svg class="ms-2" fill="#FFFFFF" height="18px" width="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-38.5 -38.5 461.97 461.97" xml:space="preserve" stroke="#FFFFFF" stroke-width="20.403463000000002" transform="rotate(0)">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="2.309826"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <g id="Sign_Out">
                      <path d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03 C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03 C192.485,366.299,187.095,360.91,180.455,360.91z"></path>
                      <path d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279 c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179 c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z"></path>
                    </g>
                    <g> </g>
                    <g> </g>
                    <g> </g>
                    <g> </g>
                    <g> </g>
                    <g> </g>
                  </g>
                </g>
              </svg></div>
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
          </span>
        </a>
        @endauth
      </div>
    </div>
  </div>

</nav>