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

<header class="rbt-header rbt-header-2">
    <div class="rbt-sticky-placeholder"></div>

    @@include('header/header-2.php', {
    "logo": "logo.png",
    "logoLight": "logo-light.png",
    "transparent": "header-not-transparent header-sticky",
    "gapSpaceBetween": "",
    "container": "container",
    "navigationEnd": "rbt-navigation-end",
    "btnClass": "rbt-switch-btn btn-gradient btn-sm hover-transform-none",
    "btnText": "Join Now",
    })

    @@include('header/search.php')
</header>
@@include('header/mobilemenu.php')