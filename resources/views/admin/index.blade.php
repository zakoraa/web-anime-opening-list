<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zanime</title>
    <link rel="icon" href="{{ asset('storage/z_rounded.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('storage/z_rounded.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css" rel="stylesheet">

</head>

<body class="flex h-screen bg-gray-200 text-white">

    @include('components.sidebar_admin')

    @yield('content')
</body>
<script src="{{ asset('js/modal.js') }}"></script>
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

</html>