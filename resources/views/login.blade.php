<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#ffffff] object-fill max-h-screen fixed w-full text-white">
    <img class="w-full h-screen z-0" src="{{ asset('storage/anime.webp') }}" alt="jujutsu" />
    <div class="absolute top-0 left-0 w-full h-full font-extrabold flex-col flex justify-center items-center px-10 lg:px-20">
        <div class="w-full rounded-lg p-8" style="width: 60%;">
            <form>
                <div class="mb-10">
                    <input type="email" id="email" name="email" class="w-full px-5 py-4 mb-6 rounded-3xl  focus:outline-none focus:border-blue-500" placeholder="Email" required style="background-color: #0000009c;">
                </div>
                <div class="mb-10">
                    <input type="password" id="password" name="password" class="w-full px-5 py-4 mb-6 rounded-3xl focus:outline-none focus:border-blue-500" placeholder="Password" required style="background-color: #0000009c;">
                </div>
                <button type="submit" class="w-full rounded-3xl py-4" style="background-color: #101820; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#374151';" onmouseout="this.style.backgroundColor='#101820';">
                    Login
                </button>

            </form>
        </div>
    </div>
</body>



</html>