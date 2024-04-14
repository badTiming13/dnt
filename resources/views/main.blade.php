<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bfb8c563cb.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased" style="font-family: 'Montserrat';">
    @if(Request::is('templates/*/edit'))
    <div class="text-center bg-gray-500 pb-12 text-white">
        Header
    </div>
    @endif
    <nav class="flex items-center justify-between ">
        <div class="flex items-center">
            <h1 class="" style="font-size: 2rem;font-weight: 700; color: #2e3b52;">DNT</h1>
        </div>
        <div class="">
            <ul class="flex items-center gap-4">
                <a href="#">
                    <li>@lang('navbar.home')</li>
                </a>

                <a href="#">
                    <li>@lang('navbar.about')</li>
                </a>

                <a href="#">
                    <li>@lang('navbar.services')</li>
                </a>

                <a href="#">
                    <li>@lang('navbar.portfolio')</li>
                </a>

                <a href="#">
                    <li>@lang('navbar.strap')</li>
                </a>

                <a href="#">
                    <li>@lang('navbar.carreers')</li>
                </a>

                <a href="#">
                    <li>@lang('navbar.contact')</li>
                </a>
            </ul>
        </div>
        <div>
            <x-language-dropdown />
        </div>
    </nav>

    <main class="min-h-screen">

    </main>

    @if(Request::is('templates/*/edit'))
    <div class="py-8">
        <div class="text-center bg-gray-500 pb-12 text-white">
            Footer
        </div>

        <div class="h-[500px]">

        </div>
    </div>
    @endif
    <footer class="flex items-center justify-between">
        <div class="flex gap-6">
            <a href="#">
                <span style="color:	#1877F2;">
                    <i class="fa-brands fa-facebook fa-2xl"></i>
                </span>
            </a>
            <a href="#">
                <span style="color: #d62976;">
                    <i class="fa-brands fa-instagram fa-2xl"></i>
                </span>
            </a>
            <a href="#">
                <span style="color:	#FF0000;">
                    <i class="fa-brands fa-youtube fa-2xl"></i>
                </span>
            </a>
        </div>
        <div class="flex flex-col items-center justify-center ">
            <h1>Copyright © 2024 AutomateMe.
            </h1>
            <h1>All rights reserved.</h1>
        </div>
        <div>
            <a href="#">
                <span style="color:	#25D366;">
                    <i class="fa-brands fa-whatsapp fa-4x"></i>
                </span>
            </a>
        </div>
    </footer>
</body>

</html>