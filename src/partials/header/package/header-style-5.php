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
<header class="rbt-header rbt-header-5">
    <div class="rbt-sticky-placeholder"></div>

    @@include('header/headerTop/headerTop-5.php', {
    "bgColor": "bg-color-white rbt-border-bottom",
    "gapSpaceBetween": "header-space-betwween",
    "container": "container-fluid",
    "flexDirection": "",
    "btnClass": "rbt-switch-btn btn-gradient btn-xs",
    "btnText": "Log In",
    })

    @@include('header/header-5.php', {
    "logo": "logo.png",
    "logoLight": "logo-light.png",
    "transparent": "bg-color-white header-not-transparent header-sticky",
    "gapSpaceBetween": "header-space-betwween",
    "container": "container-fluid",
    "navigationEnd": "rbt-navigation-center",
    "btnClass": "rbt-marquee-btn marquee-auto btn-gradient btn-sm hover-transform-none",
    "btnText": "Enroll Now",
    })

</header>
@@include('header/mobilemenu.php')