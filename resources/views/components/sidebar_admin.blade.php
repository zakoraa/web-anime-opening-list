<div class="h-screen relative w-1/5 bg-gray-900 text-gray-100">
    <div class="p-4 flex items-center justify-between">
        <div class="flex items-center">
            <a href="https://linktr.ee/raflisilehu" class="relative flex items-center me-5" target="_blank">
                <img class="rounded-full border-2 border-white" src="{{ asset('storage/Z.jpg') }}" alt="hallo" width="50px">
            </a>
            <span class="text-xl font-semibold">Admin</span>
        </div>
    </div>
    <nav class="mt-6">
        <ul>
            <li class="mb-4">
                <a href="{{ route('user.index') }}" class="group flex items-center text-gray-300 hover:text-white py-2 px-4 relative">
                    <svg class="me-3" style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" fill="white"></path>
                    </svg>
                    <span>User</span>
                    <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                </a>
            </li>
            <li class="mb-4 relative">
                <div class="group items-center text-gray-300 hover:text-white py-2 px-4">
                    <div class="flex cursor-pointer"> <svg class="me-3" style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-btn-fill" viewBox="0 0 16 16">
                            <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" fill="white"></path>
                        </svg>
                        <span class="relative z-10">List Opening Anime</span>
                    </div>
                    <ul class="hidden flex-col group-hover:block w-full ml-2 mt-2 py-2 bg-gray-900 text-gray-300">
                        <li class="cursor-pointer py-2 px-4 hover:bg-gray-800 transition-colors duration-300"><a class="block w-full" href="{{ route('videos.index') }}">Video Table</a> </li>
                        <li class="cursor-pointer py-2 px-4 hover:bg-gray-800 transition-colors duration-300"><a class="block w-full" href="{{ route('videos.add') }}">Add Video</a> </li>
                    </ul>
                </div>
            </li>

            @auth
            <a href="{{ route('logout') }}" class="group flex items-center text-gray-300 hover:text-white py-2 px-4 relative">
                <svg class="me-3" fill="#FFFFFF" height="18px" width="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-38.5 -38.5 461.97 461.97" xml:space="preserve" stroke="#FFFFFF" stroke-width="20.403463000000002" transform="rotate(0)">
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
                </svg>
                <span>Logout</span>
                <span class="absolute inset-x-0 bottom-0 h-0.5 bg-white origin-left transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
            </a>
            @endauth
            </li>
        </ul>
    </nav>

</div>