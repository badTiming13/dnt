<nav class="flex items-center justify-between nav-bg" style=" font-family: Montserrat, ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; padding-inline: 3rem; padding-block: 1rem;">
    <div class="flex items-center">
        <h1 class="" style="font-size: 2rem;font-weight: 700; color: #2e3b52;">DNT</h1>
    </div>
    <div class="">
        <ul class="flex items-center gap-10 text-black font-medium">
            <a href="/home">
                <li>@lang('navbar.home')</li>
            </a>


            <div class="dropdown">
                <button class="dropbtn">@lang('navbar.about')
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">@lang('navbar.about_company')</a>
                    <a href="#">@lang('navbar.about_bim')</a>
                    <a href="#">@lang('navbar.about_reviews')</a>
                    @if(trans('navbar.about_posts') != "")
                        <a href="#">@lang('navbar.about_posts')</a>
                    @endif
                </div>
            </div>

          
            <div class="dropdown">
                <button class="dropbtn">@lang('navbar.services')
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">@lang('navbar.services_concept_proj')</a>
                    <a href="#">@lang('navbar.services_schema_proj')</a>
                    <a href="#">@lang('navbar.services_work_proj')</a>
                    <a href="#">@lang('navbar.services_net_proj')</a>
                    <a href="#">@lang('navbar.services_landscape_proj')</a>
                    <a href="#">@lang('navbar.services_int_design')</a>
                    <a href="#">@lang('navbar.services_arch_3d')</a>
                    <a href="#">@lang('navbar.services_vr')</a>
                    <a href="#">@lang('navbar.services_bill_const')</a>
                    <a href="#">@lang('navbar.services_tech_proj')</a>
                    <a href="#">@lang('navbar.services_author')</a>
                   
                </div>
            </div>


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
    <div class="text-black">
        <x-language-dropdown />
    </div>
</nav>