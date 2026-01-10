<div class="rbt-header-wrapper @@gapSpaceBetween @@transparent">
    <div class="@@container">
        <div class="mainbar-row @@navigationEnd align-items-center">
            <div class="header-left">
                <div class="logo logo-dark">
                    <a href="index.php">
                        <img src="assets/images/logo/@@logo" alt="Education Logo Images">
                    </a>
                </div>

                <div class="logo d-none logo-light">
                    <a href="index.php">
                        <img src="assets/images/dark/logo/@@logoLight" alt="Education Logo Images">
                    </a>
                </div>
            </div>

            <div class="rbt-main-navigation d-none d-xl-block">
                @@include('header/nav.php')
            </div>

            <div class="header-right">
                <!-- Navbar Icons -->
                <ul class="quick-access">
                    <li class="access-icon">
                        <a class="search-trigger-active rbt-round-btn" href="#">
                            <i class="feather-search"></i>
                        </a>
                    </li>
                </ul>

                <div class="rbt-btn-wrapper d-none d-xl-block ml--20">
                    <a class="rbt-btn @@btnClass" href="#">
                        <span data-text="@@btnText">@@btnText</span>
                    </a>
                </div>

                <!-- Start Mobile-Menu-Bar -->
                <div class="mobile-menu-bar ml--5 d-block d-xl-none">
                    <div class="hamberger">
                        <button class="hamberger-button">
                            <i class="feather-menu"></i>
                        </button>
                    </div>
                </div>
                <!-- Start Mobile-Menu-Bar -->
            </div>
        </div>
    </div>
    @@include('header/search.php')
</div>