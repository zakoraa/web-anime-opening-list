<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css" rel="stylesheet">
   

</head>

<body class="flex min-h-screen bg-gray-200 text-white">
    @include('components.sidebar_admin')

    @yield('content')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const listItems = document.querySelectorAll('.list-item');

            listItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    this.classList.toggle('active');
                });
            });
        });
    </script>

    <script>
        function togglePopup(popupId, videoId) {
            const popup = document.getElementById(popupId);
            popup.classList.toggle('hidden');
        }
    </script>
</body>



</html>