<div class="text-black py-10 flex flex-col items-center justify-center mx-auto">
    <div class="flex items-center justify-center">
        <h1 class="text-3xl test">@lang('homepage.about')</h1>
    </div>

    <div class="flex flex-wrap place-items-stretch justify-center gap-8 py-12 lg:py-32 mx-auto">
        <div class="card">
            <div class="flex items-center">
                <img src="/images/licence.jpg" alt="license icon" class="w-20">
            </div>
            <h1>@lang('homepage.license')</h1>
            <p>@lang('homepage.licensedesc')</p>
        </div>

        <div class="card">
            <div class="flex items-center">
                <img src="/images/18yrs.jpg" alt="license icon" class="w-20">
            </div>
            <h1>@lang('homepage.18yrs')</h1>
            <p>@lang('homepage.18yrsdesc')</p>
        </div>

        <div class="card">
            <div class="flex items-center">
                <img src="/images/170spec.jpg" alt="license icon" class="w-20">
            </div>
            <h1>@lang('homepage.170spec')</h1>
            <p>@lang('homepage.170specdesc')</p>
        </div>

        <div class="card">
            <div class="flex items-center">
                <img src="/images/complexproj.jpg" alt="license icon" class="w-20">
            </div>
            <h1>@lang('homepage.complexproj')</h1>
            <p>@lang('homepage.complexprojdesc')</p>
        </div>

        <div class="card">
            <div class="flex items-center">
                <img src="/images/3d1.jpg" alt="license icon" class="w-20">
            </div>
            <h1>@lang('homepage.3d')</h1>
            <p>@lang('homepage.3ddesc')</p>
        </div>

        <div class="card">
            <div class="flex items-center">
                <img src="/images/intdesign.jpg" alt="license icon" class="w-20">
            </div>
            <h1>@lang('homepage.design')</h1>
            <p>@lang('homepage.designdesc')</p>
        </div>

    </div>

    <div class="relative sm:py-8 lg:py-1">
        <div class="absolute -inset-5">
            <div class="w-full h-full max-w-sm mx-auto lg:mx-0 opacity-30 blur-lg bg-gradient-to-r from-yellow-400 via-pink-500 to-green-600">
            </div>
        </div>
        <a href="#" title="" class="relative z-10 inline-flex items-center justify-center w-full px-8 py-3 text-lg font-bold text-white transition-all duration-200 bg-gray-900 border-2 border-transparent sm:w-auto rounded-xl font-pj hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" role="button">
            @lang('homepage.moreinfobtn')
        </a>
    </div>
</div>