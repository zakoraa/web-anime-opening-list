<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#101820]  max-h-screen fixed w-full text-white">
    <img class="w-full object-cover min-h-screen z-0" src="{{ asset('storage/anime.webp') }}" alt="jujutsu" />
    <div class="absolute top-0 left-0 w-full h-full font-extrabold flex-col flex justify-center items-center px-5 lg:px-20">
        <div class="lg:w-2/3 w-full rounded-lg p-8 mt-5">
            <form>
                <div class="mb-10">
                    <input type="email" id="email" name="email" class="w-full px-5 py-4 lg:px-5 lg:py-6 mb-6 rounded-3xl  focus:outline-none " placeholder="Email" required style="background-color: #0000009c;">
                </div>
                <div class="mb-10">
                    <input type="password" id="password" name="password" class="w-full px-5 py-4 lg:px-5 lg:py-6 mb-6 rounded-3xl focus:outline-none " placeholder="Password" required style="background-color: #0000009c;">
                </div>
                <button href="/" type="submit" class="w-full rounded-3xl py-4 lg:py-6" style="background-color: #101820; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#374151';" onmouseout="this.style.backgroundColor='#101820';">
                    Sign Up
                </button>

            </form>
        </div>
    </div>
    <div class="absolute w-full top-0 left-0 flex justify-between items-center h-20 px-5 lg:px-20">
        <img class="rounded-full border-2 border-white" src="{{ asset('storage/Z.jpg') }}" alt="hallo" width="70px">
        <div class="flex w-52 lg:w-56 justify-between">
            <h1 class="rounded-lg cursor-pointer hover:bg-[#0000009c] transition duration-300 py-2 px-4">Sign Up</h1>
            <a href="/login" class="py-2 px-4 rounded-lg cursor-pointer hover:bg-[#0000009c] transition duration-300">Login </a>
        </div>
    </div>

    <div class="absolute bottom-0 right-0 p-10 text-xs lg:text-start text-center">
    © Muhammad Rafli Silehu | Mobile Developer at Google
    </div>
</body>



</html>