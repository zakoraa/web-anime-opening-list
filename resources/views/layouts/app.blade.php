<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anime Z</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css" rel="stylesheet">

  <style>
    .swiper-button-prev::after,
    .swiper-button-next::after {
      color: #101820;
      font-size: 13px;
    }
  </style>

</head>

<body class="bg-[#101820]">
  @yield('content')
</body>

<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/navbar.js') }}"></script>
<script>
  AOS.init();
</script>
<script>
    function closeAlert() {
        var alert = document.getElementById('myAlert');
        alert.style.display = 'none';
    }
</script>

</html>