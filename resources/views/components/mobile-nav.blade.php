<div class="mobile-nav">
    <div class="flex items-center justify-between w-screen px-12">
        <div>
            <a href="/">
                <div class="flex items-center w-10 h-10">
                    <svg width="299" height="351" viewBox="0 0 299 351" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 349V168.25H49.25C67.083 168.25 82.25 171 94.75 176.5C107.417 182 117.583 189.25 125.25 198.25C132.917 207.25 138.5 217.25 142 228.25C145.667 239.083 147.5 249.917 147.5 260.75C147.5 274.417 145.083 286.667 140.25 297.5C135.583 308.333 129.083 317.583 120.75 325.25C112.417 332.917 102.833 338.833 92 343C81.333 347 70 349 58 349H0ZM24.25 325.75H53.25C63.25 325.75 72.417 324.25 80.75 321.25C89.25 318.25 96.583 313.917 102.75 308.25C109.083 302.583 114 295.667 117.5 287.5C121 279.167 122.75 269.75 122.75 259.25C122.75 248.083 120.917 238.333 117.25 230C113.583 221.5 108.583 214.417 102.25 208.75C95.917 203.083 88.75 198.833 80.75 196C72.75 193 64.333 191.5 55.5 191.5H24.25V325.75Z" fill="black" />
                        <path d="M243.5 192.75L103.75 51L110.75 52.75L111.25 187H87V0.75H88.25L226.5 143L220.75 141.75L220.25 6.25H244.25V192.75H243.5Z" fill="black" />
                        <path d="M178.75 170.25H298.75V193.5H250.25V351H226V193.5H178.75V170.25Z" fill="black" />
                    </svg>
                </div>
            </a>
        </div>
        <div>
            <h1 class="menu-icon text-black" onclick="openMenu()">menu</h1>
        </div>
    </div>
    <div id="container">
        <div id="close" onclick="closeMenu()" class="text-black">&#10133;</div>
        <ul class="text-black" id="menu">
            <li><a href="">@lang('navbar.home')</a></li>
            <li><a href="">@lang('navbar.about')</a></li>
            <li><a href="">@lang('navbar.services')</a></li>
            <li><a href="">@lang('navbar.portfolio')</a></li>
            <li><a href="">@lang('navbar.strap')</a></li>
            <li><a href="">@lang('navbar.carreers')</a></li>
            <li><a href="">@lang('navbar.contact')</a></li>
        </ul>
    </div>
</div>

<script>
    function openMenu() {
        document.getElementById('container').style.right = '0%';
        document.getElementById('menu').style.opacity = '1';
    }

    function closeMenu() {
        document.getElementById('container').style.right = '100%';
        document.getElementById('menu').style.opacity = '0';
    }
</script>