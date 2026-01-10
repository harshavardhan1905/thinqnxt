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
<header class="rbt-header">
    @@include('header/topbar/headerTopBar.php')

    <div class="rbt-sticky-placeholder"></div>

    <div class="rbt-header-wrapper">
        <div class="container">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                <div class="header-left">
                    <div class="logo logo-dark">
                        <a href="index.php">
                            <img src="assets/images/logo/logo.png" alt="Education Logo Images">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="index.php">
                            <img src="assets/images/dark/logo/logo-light.png" alt="Education Logo Images">
                        </a>
                    </div>
                </div>

                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav onepagenav">
                        <ul class="mainmenu">
                            <li class="current">
                                <a href="#home">Home</a>
                            </li>
                            <li>
                                <a href="#about">About Us</a>
                            </li>
                            <li>
                                <a href="#guideline">Course Guideline</a>
                            </li>
                            <li>
                                <a href="#coursecontent">Course Content</a>
                            </li>
                            <li>
                                <a href="#career">Career</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <!-- Start OffCanvas Menu  -->
                    <div class="rbt-offcanvas-trigger" id="rbt-offcanvas-activation">
                        <span class="offcanvas-trigger">
                            <span class="offcanvas-bars">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </div>
                    <!-- End OffCanvas Menu  -->
                </div>

            </div>
        </div>
        @@include('header/search.php')
    </div>
</header>

<!-- Start Side Vav -->
<div class="side-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/logo/logo.png" alt="Education Logo Images">
                    </a>
                </div>
                <div class="rbt-btn-close" id="btn_sideNavClose">
                    <button class="rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
            <p class="description">Histudy is a education website template. You can customize all.</p>

            <ul class="navbar-top-left rbt-information-list justify-content-start">
                <li>
                    <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                </li>
                <li>
                    <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                </li>
            </ul>
        </div>
        <nav class="side-nav w-100 mt--60 mb--80">
            <ul class="navbar-nav">
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#about">About Us</a>
                </li>
                <li>
                    <a href="#guideline">Course Guideline</a>
                </li>
                <li>
                    <a href="#coursecontent">Course Content</a>
                </li>
                <li>
                    <a href="#career">Career</a>
                </li>
            </ul>
        </nav>
        <div class="social-share-wrapper">
            <span class="rbt-short-title d-block">Find With Us</span>
            <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                <li><a href="https://www.facebook.com/">
                        <i class="feather-facebook"></i>
                    </a>
                </li>
                <li><a href="https://www.twitter.com">
                        <i class="feather-twitter"></i>
                    </a>
                </li>
                <li><a href="https://www.instagram.com/">
                        <i class="feather-instagram"></i>
                    </a>
                </li>
                <li><a href="https://www.linkdin.com/">
                        <i class="feather-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
        <ul class="rbt-secondary-menu mt--50">
            <li><a href="#">My Account</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>
</div>
<!-- End Side Vav -->

<a class="close_side_menu" href="javascript:void(0);"></a>