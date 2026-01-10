@@include('styles.php',{
"title": "Modern University"
})

<body class="rbt-header-sticky">

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
    <header class="rbt-header rbt-header-4 rbt-header-4-container-var">
        <div class="rbt-sticky-placeholder"></div>
        @@include('header/headerTop/headerTop-9.php', {
        "bgColor": "bg-color-white rbt-border-bottom",
        "gapSpaceBetween": "header-space-betwween",
        "container": "container",
        "flexDirection": "",
        "btnClass": "rbt-switch-btn btn-gradient btn-xs",
        "btnText": "Register Now",
        })
    
        @@include('header/header-4.php', {
        "logo": "logo-black.png",
        "logoLight": "logo-light.png",
        "sticky": "bg-color-white header-sticky",
        "gapSpaceBetween": "header-space-betwween shadow-none",
        "container": "container",
        "navigationEnd": "rbt-navigation-start",
        "btnClass": "rbt-marquee-btn marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none",
        "btnText": "Enroll Now",
        })
    
    </header>
    @@include('header/mobilemenu.php')
    @@include('header/offcanvas/cart.php')
    
    <main class="rbt-main-wrapper">
        <!-- Start Banner Area  -->
        <div class="rbt-banner-area rbt-banner-19">
            <div class="wrapper">
                <div class="swiper rbt-banner-activation-2 rbt-slider-animation rbt-arrow-between">
                    <div class="swiper-wrapper">
                        <!-- Start Single Banner  -->
                        <div class="swiper-slide">
                            <div class="rbt-banner-item bg_image bg_image--24">
                                <div class="shape-1">
                                    <img src="assets/images/shape/m-banner-shape-01.png" alt="Shape">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner">
                                                <h6 class="subtitle"><span><img src="assets/images/icons/trustpilot-white.png" alt="trustpilot"></span>Excellent 4.9 out of 5</h6>
                                                <h1 class="title">Education Is The Best Key Success In Life</h1>
                                                <p class="description">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</p>
                                                <div class="bottom-content d-flex align-items-center gap-5 flex-wrap">
                                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Apply Today</span>
                                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                    <div class="d-flex flex-wrap gap-4 align-items-center">
                                                        <div class="profile-share">
                                                            <a href="#" class="avatar" data-tooltip="Mark Jordan" tabindex="0">
                                                                <img src="assets/images/shape/art-stu-1.png" alt="education">
                                                            </a>
                                                            <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0">
                                                                <img src="assets/images/shape/art-stu-3.png" alt="education">
                                                            </a>
                                                            <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                                                <img src="assets/images/shape/art-stu-2.png" alt="education">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <h6 class="number mb-0">36K+</h6>
                                                            <p class="number-title">Enrolled Students</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Banner  -->

                        <!-- Start Single Banner  -->
                        <div class="swiper-slide">
                            <div class="rbt-banner-item bg_image bg_image--25">
                                <div class="shape-1">
                                    <img src="assets/images/shape/m-banner-shape-01.png" alt="Shape">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner">
                                                <h6 class="subtitle"><span><img src="assets/images/icons/trustpilot-white.png" alt="trustpilot"></span>Excellent 4.9 out of 5</h6>
                                                <h1 class="title">Unlock Your Potential with Quality Education</h1>
                                                <p class="description">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</p>
                                                <div class="bottom-content d-flex align-items-center gap-5 flex-wrap">
                                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Apply Today</span>
                                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                    <div class="d-flex flex-wrap gap-4 align-items-center">
                                                        <div class="profile-share">
                                                            <a href="#" class="avatar" data-tooltip="Mark Jordan" tabindex="0">
                                                                <img src="assets/images/shape/art-stu-1.png" alt="education">
                                                            </a>
                                                            <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0">
                                                                <img src="assets/images/shape/art-stu-3.png" alt="education">
                                                            </a>
                                                            <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                                                <img src="assets/images/shape/art-stu-2.png" alt="education">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <h6 class="number mb-0">36K+</h6>
                                                            <p class="number-title">Enrolled Students</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Banner  -->

                        <!-- Start Single Banner  -->
                        <div class="swiper-slide">
                            <div class="rbt-banner-item bg_image bg_image--26">
                                <div class="shape-1">
                                    <img src="assets/images/shape/m-banner-shape-01.png" alt="Shape">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inner">
                                                <h6 class="subtitle"><span><img src="assets/images/icons/trustpilot-white.png" alt="trustpilot"></span>Excellent 4.9 out of 5</h6>
                                                <h1 class="title">Online Learning Now In Your Fingertps</h1>
                                                <p class="description">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</p>
                                                <div class="bottom-content d-flex align-items-center gap-5 flex-wrap">
                                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Apply Today</span>
                                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                    <div class="d-flex flex-wrap gap-4 align-items-center">
                                                        <div class="profile-share">
                                                            <a href="#" class="avatar" data-tooltip="Mark Jordan" tabindex="0">
                                                                <img src="assets/images/shape/art-stu-1.png" alt="education">
                                                            </a>
                                                            <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0">
                                                                <img src="assets/images/shape/art-stu-3.png" alt="education">
                                                            </a>
                                                            <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                                                <img src="assets/images/shape/art-stu-2.png" alt="education">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <h6 class="number mb-0">36K+</h6>
                                                            <p class="number-title">Enrolled Students</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Banner  -->
                    </div>
        
                    <div class="rbt-slider-control">
                        <div class="rbt-swiper-arrow-2 rbt-arrow-left">
                            <span class="icon">
                                <i class="rbt-icon-top feather-arrow-left"></i>
                            </span>
                            <span class="text">Prev</span>
                        </div>
            
                        <div class="rbt-swiper-arrow-2 rbt-arrow-right">
                            <span class="text">
                                Next
                            </span>
                            <span class="icon">
                                <i class="rbt-icon feather-arrow-right"></i>
                            </span>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
        <!-- End Banner Area  -->

        <!-- Start About Area -->
        <div class="rbt-about-area rbt-section-gapTop overflow-hidden">
            <div class="about-style-4">
                <div class="container">
                    <div class="row row--40 mt_dec--40">
                        <div class="col-xl-6 col-12 mt--40">
                            <div class="content">
                                <div class="section-title">
                                    <h6 class="b2 mb--15">
                                        <span class="theme-gradient">Welcome To Histudy</span>
                                    </h6>
                                    <h2 class="title w-600">Your Goals Are Within <br> <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 16.8032C7.91578 16.9588 13.8152 14.5642 17.3757 9.31372C18.7544 7.28056 19.2564 4.87202 19.6736 2.5C20.006 12.1364 30.1484 15.4819 38 16.8227C30.9581 16.3571 23.3519 20.0182 22.65 27.5C18.2438 20.052 10.1583 17.4958 2 16.8032Z" fill="white" stroke="url(#paint0_linear_100_66)" stroke-width="4" stroke-miterlimit="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <defs>
                                        <linearGradient id="paint0_linear_100_66" x1="18.2" y1="2.5" x2="18.2" y2="27.5" gradientUnits="userSpaceOnUse">
                                        <stop offset stop-color="#2F57EF"/>
                                        <stop offset="1" stop-color="#C586EE"/>
                                        </linearGradient>
                                        </defs>
                                        </svg> Reach.
                                    </h2>
                                    <p class="mt--20">At Histudy University, we are moving boldly - and concertedly - to expand tomorrow's frontiers. We believe that we have the power to shape the future, for the better</p>
                                    <ul class="mt--30 mb--25">
                                        <li>
                                            <span class="icon bg-primary-opacity">
                                                <i class="feather-heart"></i>
                                            </span>
                                            <span class="text">Flexible Classes</span>
                                        </li>
                                        <li>
                                            <span class="icon bg-secondary-opacity">
                                                <i class="feather-book"></i>
                                            </span>
                                            <span class="text">Learn From Anywhere</span>
                                        </li>
                                    </ul>
                                    <div class="d-flex align-items-center gap-5 flex-wrap">
                                        <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">Explore More</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                        <div>
                                            <img src="assets/images/others/signature-01.png" alt="Signature">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12 mt--40">
                            <div class="about-thumb">
                                <div class="shape-1">
                                    <img src="assets/images/shape/mf-shape-01.png" alt="Shape">
                                </div>
                                <div class="shape-2">
                                    <img src="assets/images/shape/v-union.png" alt="Shape">
                                </div>
                                <div class="since">
                                    <span>
                                        <img src="assets/images/icons/award-01.png" alt="Award Icon">
                                    </span>
                                    <div class="title-wrap">
                                        <h4 class="number"><span class="odometer rbt-font-primary" data-count="1890">0000</span></h4>
                                        <h6 class="subtitle">Since</h6>
                                    </div>
                                </div>
                                <div class="thumb-1">
                                    <img src="assets/images/others/m-banner-men.png" alt="Thumb">
                                </div>
                                <h6 class="title">President of University</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->

        <!-- Start Category Area -->
        <div class="rbt-categories-area rbt-section-gap">
            <div class="container">
                <div class="row g-5 align-items-center mb--50">
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="section-title">
                            <h2 class="title">Best Platform To <span><img src="assets/images/shape/o-icon-2.png" alt="Cap Icon"></span> Learn Everything</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="d-flex justify-content-end gap-3 rbt-arrow-between">
                            <div class="rbt-swiper-arrow style_2 rbt-arrow-left">
                                <div class="custom-overfolow">
                                    <i class="rbt-icon feather-arrow-left"></i>
                                    <i class="rbt-icon-top feather-arrow-left"></i>
                                </div>
                            </div>
                
                            <div class="rbt-swiper-arrow style_2 rbt-arrow-right">
                                <div class="custom-overfolow">
                                    <i class="rbt-icon feather-arrow-right"></i>
                                    <i class="rbt-icon-top feather-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category-activation-four swiper">
                    <div class="swiper-wrapper">
                        <!-- Start Single Item -->
                        <div class="swiper-slide">
                            <div class="rbt-cat-box rbt-cat-box-1 variation-3 text-center">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-filter-one-toggle.php">
                                            <img src="assets/images/category/image/web-design.jpg" alt="Category Images">
                                            <div class="read-more-btn">
                                                <span class="rbt-btn btn-sm btn-white radius-round">20 Courses</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="course-filter-one-toggle.php">Web Design</a></h5>
                                        <p class="description">Web App Application</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Start Single Item -->
                        <div class="swiper-slide">
                            <div class="rbt-cat-box rbt-cat-box-1 variation-3 text-center">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-filter-one-toggle.php">
                                            <img src="assets/images/category/image/graphic-design.jpg" alt="Category Images">
                                            <div class="read-more-btn">
                                                <span class="rbt-btn btn-sm btn-white radius-round">15 Courses</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="course-filter-one-toggle.php">Graphic Design</a></h5>
                                        <p class="description">Design is Art</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Start Single Item -->
                        <div class="swiper-slide">
                            <div class="rbt-cat-box rbt-cat-box-1 variation-3 text-center">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-filter-one-toggle.php">
                                            <img src="assets/images/category/image/personal-development.jpg" alt="Category Images">
                                            <div class="read-more-btn">
                                                <span class="rbt-btn btn-sm btn-white radius-round">9 Courses</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="course-filter-one-toggle.php">Personal Development</a></h5>
                                        <p class="description">Web App Application</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Start Single Item -->
                        <div class="swiper-slide">
                            <div class="rbt-cat-box rbt-cat-box-1 variation-3 text-center">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="course-filter-one-toggle.php">
                                            <img src="assets/images/category/image/software.jpg" alt="Category Images">
                                            <div class="read-more-btn">
                                                <span class="rbt-btn btn-sm btn-white radius-round">15 Courses</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="course-filter-one-toggle.php">IT and Software</a></h5>
                                        <p class="description">Web App Application</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Category Area -->

        <!-- Start Course Area -->
        <div class="rbt-course-area rbt-sec-cir-shadow-1 bg-color-extra2 rbt-section-gap rbt-section-box">
            <div class="gradient-shape-top"></div>
            <div class="gradient-shape-bottom"></div>
            <div class="container">
                <div class="row mb--30">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h6 class="b2 mb--15"><span class="theme-gradient">Admission</span></h6>
                            <h2 class="title w-600">Academic Programs <br> <span class="theme-gradient">At Histudy</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row mb--40">
                    <div class="col-lg-12">
                        <ul class="rbt-course-tab-button nav nav-tabs" id="rbt-myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="active" id="development-tab" data-bs-toggle="tab" data-bs-target="#development" type="button" role="tab" aria-controls="development" aria-selected="true"><span class="filter-text">Domestic Admission</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="ui_ux-tab" data-bs-toggle="tab" data-bs-target="#ui-ux" type="button" role="tab" aria-controls="ui-ux" aria-selected="false"><span class="filter-text">Graduate Program</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false"><span class="filter-text">Post-Graduate</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="business-tab" data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab" aria-controls="business" aria-selected="false"><span class="filter-text">Online Program</span></button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content" id="rbt-myTabContent">
                            <div class="tab-pane fade active show" id="development" role="tabpanel" aria-labelledby="development-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-01.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Data Science & ML</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$199</h6>
                                                        <span class="off-price version-02">$590</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-02.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">English Course</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$159</h6>
                                                        <span class="off-price version-02">$490</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-03.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Graphic Design</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$145</h6>
                                                        <span class="off-price version-02">$308</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="ui-ux" role="tabpanel" aria-labelledby="ui_ux-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-02.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">English Course</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$159</h6>
                                                        <span class="off-price version-02">$490</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-01.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Data Science & ML</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$199</h6>
                                                        <span class="off-price version-02">$590</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-03.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Graphic Design</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$145</h6>
                                                        <span class="off-price version-02">$308</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-02.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">English Course</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$159</h6>
                                                        <span class="off-price version-02">$490</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-03.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Graphic Design</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$145</h6>
                                                        <span class="off-price version-02">$308</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-01.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Data Science & ML</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$199</h6>
                                                        <span class="off-price version-02">$590</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-01.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Data Science & ML</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$199</h6>
                                                        <span class="off-price version-02">$590</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-03.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Graphic Design</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$145</h6>
                                                        <span class="off-price version-02">$308</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/university-02.jpg" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>07 Lessons</li>
                                                    <li><i class="feather-users"></i>01 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">English Course</a>
                                                </h4>
                                                <p class="rbt-card-text">Orem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (1 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$159</h6>
                                                        <span class="off-price version-02">$490</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt--55">
                    <div class="col-lg-12">
                        <div class="load-more-btn text-center">
                            <a class="rbt-btn btn-gradient btn-lg hover-icon-reverse" href="course-with-tab-two.php">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">View All Courses</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Course Area -->

        <!-- Start Video Area  -->
        <div class="rbt-video-area video-section-02 bg-color-white rbt-section-gap">
            <div class="shape-1">
                <img src="assets/images/shape/v-star.png" alt="Star Shape">
            </div>
            <div class="container">
                <div class="row row--35 align-items-center mt_dec--50">
                    <div class="col-xl-6 col-12 mt--50">
                        <div class="video-popup-wrapper version-02">
                            <div class="v-shape-1">
                                <img src="assets/images/shape/video-dot-01.png" alt="Shape">
                            </div>
                            <div class="feature-1">
                                <img src="assets/images/icons/video-icon-01.png" alt="Icon">
                                <div>
                                    <h5 class="number">99%</h5>
                                    <h6 class="subtitle">Satisfied</h6>
                                </div>
                            </div>
                            <img class="w-100 rbt-radius" src="assets/images/others/video-10.jpg" alt="Video Images">
                            <a class="rbt-btn btn-white rounded-player-2 popup-video with-animation position-to-top" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                <span class="play-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-12 mt--50">
                        <div class="inner">
                            <div class="section-title text-start">
                                <h6 class="b2 mb--15"><span class="theme-gradient">Histudy</span></h6>
                                <h2 class="title w-600">Campus Life</h2>
                            </div>
            
                            <!-- Start Feature List  -->
            
                            <div class="rbt-feature-wrapper mt--30 ml_dec_20">
                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Flexible Classes</h6>
                                        <p class="feature-description">It is a long established fact that a reader will
                                            be distracted by this on readable content of when looking at its layout.</p>
                                    </div>
                                </div>
            
                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Learn From Anywhere</h6>
                                        <p class="feature-description">Sed distinctio repudiandae eos recusandae laborum eaque non eius iure suscipit laborum eaque non eius iure suscipit.</p>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-secondary-opacity">
                                        <i class="feather-award"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Skill-Based Learning</h6>
                                        <p class="feature-description">It is a long established fact that a reader will be distracted by this on readable content of when looking at its layout.</p>
                                    </div>
                                </div>
                            </div>
            
                            <!-- End Feature List  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Video Area  -->

        <!-- Start Accordion Area  -->
        <div class="rbt-accordion-area accordion-style-1 accordion-section-02 bg-color-white rbt-section-gapBottom">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h6 class="b2 mb--15"><span class="theme-gradient">University Cost</span></h6>
                            <h2 class="title w-600">University Tuition & Fees</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 align-items-start">
                    <div class="col-lg-7 order-2 order-lg-1">
                        @@include('accordion/tutioncost.php')
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="position-relative">
                            <div class="union-shape">
                                <img src="assets/images/shape/v-union.png" alt="Shape">
                            </div>
                            <div class="thumbnail">
                                <img class="radius-6" src="assets/images/others/accordion-01.png" alt="histudy image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Accordion Area  -->

        <!-- Start Event Area -->
         <div class="rbt-event-area bg-gradient-7 rbt-section-gap rbt-section-box">
            <div class="container">
                <div class="row mb--50">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h6 class="color-white w-500 mb--15 b2">Motivated to Participate?</h6>
                            <h2 class="title color-white w-600">Join Upcoming Events</h2>
                        </div>
                    </div>
                </div>
                @@include('event/event-list.php')
            </div>
         </div>
        <!-- End Event Area -->

        <!-- Start Testimonial Area -->
         <div class="rbt-testimonial-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--60">
                        <div class="section-title text-center">
                            <h6 class="b2 mb--15"><span class="theme-gradient">Testimonials</span></h6>
                            <h2 class="title w-600">Student's <span class="theme-gradient">Feedback</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <!-- Start Single Testimonial  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-testimonial-box">
                            <div class="inner">
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-01.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Martha Maldonado</h5>
                                        <span>Executive Chairman <i>@ Google</i></span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="rating mt--20">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
    
                    <!-- Start Single Testimonial  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-testimonial-box">
                            <div class="inner">
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-02.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Michael D. Lovelady</h5>
                                        <span>CEO <i>@ Google</i></span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                    <div class="rating mt--20">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
    
                    <!-- Start Single Testimonial  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-testimonial-box">
                            <div class="inner">
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-03.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Valerie J. Creasman</h5>
                                        <span>Executive Designer <i>@ Google</i></span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                    <div class="rating mt--20">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                </div>
                <!-- Start Brand -->
                <div class="mt--80">
                    <div class="rbt-brand-title-wrap">
                        <h5 class="rbt-brand-title w-600 text-center mb-0">Making <span class="theme-gradient">sensitive clients</span> more valuable for <span class="theme-gradient">companies</span> like</h5>
                    </div>
                    <ul class="brand-list brand-style-3 justify-content-start justify-content-lg-between mt--30">
                        <li><a href="#"><img src="assets/images/brand/partner-5.webp" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="assets/images/brand/partner-1.webp" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="assets/images/brand/partner-6.webp" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="assets/images/brand/partner-3.webp" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="assets/images/brand/partner-1.webp" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="assets/images/brand/partner-6.webp" alt="Brand Image"></a></li>
                    </ul>
                </div>
                <!-- Start Brand -->
            </div>
         </div>
        <!-- End Testimonial Area -->

        <!-- Start Blog Area -->
        <div class="rbt-blog-area rbt-sec-cir-shadow-1 rbt-section-gap bg-color-extra2 rbt-section-box">
            <div class="gradient-shape-top version-02"></div>
            <div class="gradient-shape-bottom version-02"></div>
            <div class="container">
                <div class="row mb--60 g-5 align-items-end">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="section-title text-start">
                            <h6 class="b2 mb--15"><span class="theme-gradient">News & Blog</span></h6>
                            <h2 class="title w-600">Have a Look on <span class="theme-gradient">Our Update</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="load-more-btn text-start text-md-end">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="blog.php">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">View All Posts</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Start Card Area -->
                <div class="row g-5">
                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.php">
                                    <img src="assets/images/blog/university-blog-01.png" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.php">Difficult Things About Education.</a></h5>
                                <p class="rbt-card-text">There are many variations of passages of Ipsum available,</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="course-details.php">Read
                                        More<i>@@include('icons/arrow-right.php')</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.php">
                                    <img src="assets/images/blog/coaching-blog-02.png" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.php">Learn How More Money With
                                        lms.</a></h5>
                                <p class="rbt-card-text">There are many variations of passages of Ipsum available,</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="course-details.php">Read
                                        More<i>@@include('icons/arrow-right.php')</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.php">
                                    <img src="assets/images/blog/university-blog-02.png" alt="Card image"> 
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.php">Understand The Background Of
                                        lms.</a></h5>
                                <p class="rbt-card-text">There are many variations of passages of Ipsum available,</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="course-details.php">Read
                                        More<i>@@include('icons/arrow-right.php')</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>
                <!-- End Card Area -->
            </div>
        </div>
        <!-- End Blog Area -->

        <!-- Start Footer aera -->
        <footer class="rbt-footer footer-style-1 bg-color-white">
            <div class="footer-top">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <div class="logo logo-dark">
                                    <a href="index.php">
                                        <img src="assets/images/logo/logo.png" alt="Edu-cause">
                                    </a>
                                </div>
                                <div class="logo d-none logo-light">
                                    <a href="index.php">
                                        <img src="assets/images/dark/logo/logo-light.png" alt="Edu-cause">
                                    </a>
                                </div>

                                <p class="description mt--20">We’re always in search for talented
                                    and motivated people. Don’t be shy introduce yourself!
                                </p>

                                <ul class="social-icon social-default justify-content-start">
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

                                <div class="contact-btn mt--30">
                                    <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="#">
                                        <div class="icon-reverse-wrapper">
                                            <span class="btn-text">Contact With Us</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h5 class="ft-title">Useful Links</h5>
                                <ul class="ft-link">
                                    <li>
                                        <a href="12-marketplace.php">Marketplace</a>
                                    </li>
                                    <li>
                                        <a href="04-kindergarten.php">kindergarten</a>
                                    </li>
                                    <li>
                                        <a href="13-university-classic.php">University</a>
                                    </li>
                                    <li>
                                        <a href="09-gym-coaching.php">GYM Coaching</a>
                                    </li>
                                    <li>
                                        <a href="faqs.php">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="about-us-01.php">About Us</a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.php">Privacy policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h5 class="ft-title">Our Company</h5>
                                <ul class="ft-link">
                                    <li>
                                        <a href="contact.php">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="become-a-teacher.php">Become Teacher</a>
                                    </li>
                                    <li>
                                        <a href="blog.php">Blog</a>
                                    </li>
                                    <li>
                                        <a href="instructor.php">Instructor</a>
                                    </li>
                                    <li>
                                        <a href="event-list.php">Events</a>
                                    </li>
                                    <li>
                                        <a href="course-filter-one-toggle.php">Course</a>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h5 class="ft-title">Get Contact</h5>
                                <ul class="ft-link">
                                    <li><span>Phone:</span> <a href="#">(406) 555-0120</a></li>
                                    <li><span>E-mail:</span> <a href="mailto:hr@example.com">admin@example.com</a></li>
                                    <li><span>Address:</span> <a href="#">15205 North Kierland Blvd.</a></li>
                                </ul>

                                <h6 class="w-600 mt--25">Newsletter</h6>
                                <form action="#" class="newsletter-form-1 version-02 mt--15 radius-round">
                                    <input class="rbt-border" type="email" placeholder="Enter Your E-Email">
                                    <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-md" type="submit">
                                        <span data-text="Subscribe">Subscribe</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rbt-separator-mid">
                <div class="container">
                    <hr class="rbt-separator m-0">
                </div>
            </div>
            @@include('footer/copyright.php')
        </footer>
        <!-- End Footer aera -->
    </main>
    
    @@include('scripts.php')
</body>

</html>