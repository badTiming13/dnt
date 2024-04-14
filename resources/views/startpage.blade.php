<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Dashboard') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/slidercss/fashion-slider.css" />
    <link rel="stylesheet" href="/slidercss/main.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/slider/fashion-slider.css', 'resources/css/slider/main.css', 'resources/js/slider/fashion-slider.js', 'resources/js/slider/main.js'])
</head>

<body class=" font-sans">
    <div id="app">
        <!-- Fashion slider container -->
        <div class="fashion-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- configure slide color with "data-slide-bg-color" attribute -->
                    <div class="swiper-slide" data-slide-bg-color="#9FA051">
                        <!-- slide title wrap -->
                        <div class="fashion-slider-title" data-swiper-parallax="-130%">
                            <!-- slide title text -->
                            <div class="fashion-slider-title-text">Nike</div>
                        </div>
                        <!-- slide image wrap -->
                        <div class="fashion-slider-scale">
                            <!-- slide image -->
                            <img src="/images/nike.jpg">
                        </div>
                    </div>
                    <!-- configure slide color with "data-slide-bg-color" attribute -->
                    <div class="swiper-slide" data-slide-bg-color="#9B89C5">
                        <!-- slide title wrap -->
                        <div class="fashion-slider-title" data-swiper-parallax="-130%">
                            <!-- slide title text -->
                            <div class="fashion-slider-title-text">Puma</div>
                        </div>
                        <!-- slide image wrap -->
                        <div class="fashion-slider-scale">
                            <!-- slide image -->
                            <img src="/images/puma.jpg">
                        </div>
                    </div>
                    <!-- configure slide color with "data-slide-bg-color" attribute -->
                    <div class="swiper-slide" data-slide-bg-color="#D7A594">
                        <!-- slide title wrap -->
                        <div class="fashion-slider-title" data-swiper-parallax="-130%">
                            <!-- slide title text -->
                            <div class="fashion-slider-title-text">Yeeze</div>
                        </div>
                        <!-- slide image wrap -->
                        <div class="fashion-slider-scale">
                            <!-- slide image -->
                            <img src="/images/yeeze.jpg">
                        </div>
                    </div>
                </div>
                <!-- right/next navigation button -->
                <div class="fashion-slider-button-prev fashion-slider-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 350 160 90">
                        <g class="fashion-slider-svg-wrap">
                            <g class="fashion-slider-svg-circle-wrap">
                                <circle cx="42" cy="42" r="40"></circle>
                            </g>
                            <path class="fashion-slider-svg-arrow" d="M.983,6.929,4.447,3.464.983,0,0,.983,2.482,3.464,0,5.946Z">
                            </path>
                            <path class="fashion-slider-svg-line" d="M80,0H0"></path>
                        </g>
                    </svg>
                </div>
                <!-- left/previous navigation button -->
                <div class="fashion-slider-button-next fashion-slider-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 350 160 90">
                        <g class="fashion-slider-svg-wrap">
                            <g class="fashion-slider-svg-circle-wrap">
                                <circle cx="42" cy="42" r="40"></circle>
                            </g>
                            <path class="fashion-slider-svg-arrow" d="M.983,6.929,4.447,3.464.983,0,0,.983,2.482,3.464,0,5.946Z">
                            </path>
                            <path class="fashion-slider-svg-line" d="M80,0H0"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <script src="/sliderjs/fashion-slider.js"></script>
    <script src="/sliderjs/main.js"></script>
    
</body>

</html>