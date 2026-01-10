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

<!-- Start Header Area -->
<header class="rbt-header rbt-header-4">
    <div class="rbt-sticky-placeholder"></div>
    @@include('header/headerTop/headerTop-4.php', {
    "bgColor": "bg-color-white border-top-bar-primary-color rbt-border-bottom",
    "gapSpaceBetween": "header-space-betwween",
    "container": "container-fluid",
    "flexDirection": "",
    "btnClass": "rbt-switch-btn btn-gradient btn-xs",
    "btnText": "Join Now",
    })

    @@include('header/header-4.php', {
    "logo": "logo.png",
    "logoLight": "logo-light.png",
    "sticky": "bg-color-white header-sticky",
    "gapSpaceBetween": "header-space-betwween",
    "container": "container-fluid",
    "navigationEnd": "rbt-navigation-start",
    "btnClass": "rbt-marquee-btn marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none",
    "btnText": "Enroll Now",
    })

</header>
@@include('header/mobilemenu.php')
@@include('header/offcanvas/cart.php')