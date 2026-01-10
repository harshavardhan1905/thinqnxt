<div id="my_switcher" class="my_switcher">
    <ul>
        <li>
            <a href="javascript: void(0);" data-theme="light" class="setColor light">
                <img src="assets/images/about/sun-01.svg" alt="Sun images"><span title="Light Mode"> Light</span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                <img src="assets/images/about/vector.svg" alt="Vector Images"><span title="Dark Mode"> Dark</span>
            </a>
        </li>
    </ul>
</div>

<header class="rbt-header rbt-header-1">
    <div class="rbt-sticky-placeholder"></div>
    @@include('header/headerTop/headerTop.php', {
    "bgColor": "bg-color-darker rbt-border-bottom",
    "gapSpaceBetween": "header-space-betwween",
    "container": "container-fluid",
    "flexDirection": "",
    })
    @@include('header/header.php', {
    "logo": "logo.png",
    "logoLight": "logo-light.png",
    "transparent": "bg-color-white header-not-transparent header-sticky",
    "gapSpaceBetween": "header-space-betwween",
    "container": "container-fluid",
    "navigationEnd": "rbt-navigation-start",
    "btnClass": "rbt-marquee-btn marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none",
    "btnText": "Enroll Now",
    })
</header>

@@include('header/mobilemenu.php')
@@include('header/offcanvas/cart.php')