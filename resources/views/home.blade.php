<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Dashboard') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/slidercss/fashion-slider.css" />
    <link rel="stylesheet" href="/slidercss/main.css" />
    <link rel="stylesheet" href="/spring-slider/main.css" />
    <link rel="stylesheet" href="/spring-slider/spring-slider.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/slider/fashion-slider.css', 'resources/css/slider/main.css', 'resources/js/slider/fashion-slider.js', 'resources/js/slider/main.js', 'resources/js/spring-slider/main.js', 'resources/js/spring-slider/spring-slider.js'])
</head>

<body class="font-sans antialiased" style="font-family: 'Montserrat';">


    <x-navbar />
    <x-mobile-nav />
    <x-fashion-slider />
    <x-about-dnt />
    <x-home-strap />
    <x-home-bim />
    @include('components.our-work')
  
    
    <div class="h-screen"></div>
    <script src="/sliderjs/fashion-slider.js"></script>
    <script src="/sliderjs/main.js"></script>
    <script src="/spring-slider/spring-slider.js"></script>
    <script src="/spring-slider/main.js"></script>
    <script src="/spring-slider2/spring-slider.js"></script>
    <script src="/spring-slider2/main.js"></script>
  

</body>

</html>