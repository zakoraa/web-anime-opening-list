<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="
https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js
"></script>
  <link href="
https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css
" rel="stylesheet">


</head>

<body class="bg-[#101820]">

  @include('components.navbar')

  @yield('content')

</body>

<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/navbar.js') }}"></script>
<script>
  AOS.init();
</script>

</html>