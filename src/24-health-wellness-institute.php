@@include('styles.php',{
"title": "Health & Wellness Institute"
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
        <div class="rbt-banner-area rbt-banner-24">
            <div class="wrapper">
                <div class="banner-img">
                    <img src="assets/images/banner/h-banner.png" alt="Banner Image">
                </div>
                <div class="container">
                    <div class="content-wrapper">
                        <div class="row row--40">
                            <div class="col-lg-7 col-12">
                                <div class="title-wrap">
                                    <div class="rbt-new-badge rbt-new-badge-one">
                                        <span class="color-primary">Admission Open 2025-26</span>
                                    </div>
                                    <h1 class="title">Community Health & Wellness Institute</h1>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <div class="inner">
                                    <p class="description">The institute of medical science offers a wide range of stimulating
                                        <span class="bold">Master of Science.</span>
                                    </p>
                                    <div class="d-flex flex-wrap gap-5 align-items-center">
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
        </div>
        <!-- End Banner Area  -->

        <!-- Start Feature Area -->
        <div class="rbt-feature-area feature-section-02">
            <div class="container">
                <div class="row g-5 rbt-index-upper mb--10">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-pink">
                                    <img src="assets/images/icons/f-icon-01.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Master of Science in Biomedical Consultancy</h6>
                            </div>
                            <p class="description">The  Master of Science in Biomedical Communication is a two-year.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-primary">
                                    <img src="assets/images/icons/f-icon-02.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Graduate Diploma in Health Research</h6>
                            </div>
                            <p class="description">The College of Health Sciences recognizes that it is imperative to evaluate.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-secondary">
                                    <img src="assets/images/icons/f-icon-03.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Summer Undergraduate Research Program</h6>
                            </div>
                            <p class="description">Undergraduate BSC students and medical students (who do not hold a graduate)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Feature Area -->

        <!-- Start About Area -->
        <div class="rbt-About-area rbt-section-gapTop">
            <div class="about-style-4 version-02">
                <div class="u-shape">
                    <img src="assets/images/shape/v-union.png" alt="Shape">
                </div>
                <div class="container">
                    <div class="row row--40 mt_dec--40">
                        <div class="col-xl-6 col-12 mt--40">
                            <div class="about-thumb">
                                <div class="shape-1">
                                    <img src="assets/images/shape/h-shape-dot-01.png" alt="Shape">
                                </div>
                                <div class="since">
                                    <span>
                                        <img src="assets/images/icons/award-gd-01.png" alt="Award Icon">
                                    </span>
                                    <div class="title-wrap">
                                        <h4 class="number"><span class="odometer rbt-font-primary" data-count="1890">0000</span></h4>
                                        <h6 class="subtitle">Since</h6>
                                    </div>
                                </div>
                                <div class="satisfied">
                                    <span>
                                        <img src="assets/images/icons/video-icon-01.png" alt="">
                                    </span>
                                    <div class="title-wrap">
                                        <h6 class="item-title"><span class="odometer rbt-font-primary" data-count="99">00</span>%</h6>
                                        <h6 class="subtitle">Satisfied</h6>
                                    </div>
                                </div>
                                <div data-parallax='{"x": 0, "y": -30}' class="thumb-1">
                                    <img src="assets/images/others/health-b-01.png" alt="Thumb">
                                </div>
                                <div data-parallax='{"x": 0, "y": 30}' class="thumb-2">
                                    <img src="assets/images/others/health-b-02.png" alt="Thumb">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12 mt--40">
                            <div class="content">
                                <div class="section-title">
                                    <h6 class="b2 mb--15">
                                        <span class="theme-gradient">Welcome To Histudy Institute</span>
                                    </h6>
                                    <h2 class="title w-600">Your Goals Are Within <br> <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 16.8032C7.91578 16.9588 13.8152 14.5642 17.3757 9.31372C18.7544 7.28056 19.2564 4.87202 19.6736 2.5C20.006 12.1364 30.1484 15.4819 38 16.8227C30.9581 16.3571 23.3519 20.0182 22.65 27.5C18.2438 20.052 10.1583 17.4958 2 16.8032Z" fill="white" stroke="url(#paint0_linear_100_66)" stroke-width="4" stroke-miterlimit="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <defs>
                                                <linearGradient id="paint0_linear_100_66" x1="18.2" y1="2.5" x2="18.2" y2="27.5" gradientUnits="userSpaceOnUse">
                                                    <stop offset stop-color="#2F57EF"></stop>
                                                    <stop offset="1" stop-color="#C586EE"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg> Reach.
                                    </h2>
                                    <ul class="rbt-course-tab-button mt--40 mb--35 justify-content-start nav nav-tabs" id="rbt-myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="active" id="development-tab" data-bs-toggle="tab" data-bs-target="#development" type="button" role="tab" aria-controls="development" aria-selected="true"><span class="filter-text">Our History</span></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button id="ui_ux-tab" data-bs-toggle="tab" data-bs-target="#ui-ux" type="button" role="tab" aria-controls="ui-ux" aria-selected="false"><span class="filter-text">Our Mission</span></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false"><span class="filter-text">Our Values</span></button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="rbt-myTabContent">
                                        <div class="tab-pane fade active show" id="development" role="tabpanel" aria-labelledby="development-tab">
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
                                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="about-us-01.php">
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
                                        <div class="tab-pane fade" id="ui-ux" role="tabpanel" aria-labelledby="ui_ux-tab">
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
                                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="about-us-01.php">
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
                                        <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
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
                                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="about-us-01.php">
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
                <div class="row mb--50">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h6 class="b2 mb--15"><span class="theme-gradient">Admission</span></h6>
                            <h2 class="title w-600">Courses Offered At Histudy <br> <span class="theme-gradient">Medical Institute</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row g-5">

                    <!-- Start Single Course  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-card variation-04 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.php">
                                    <img src="assets/images/course/medical-course-01.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>07 Lessons</li>
                                    <li><i class="feather-users"></i>01 Students</li>
                                </ul>
                                <h4 class="rbt-card-title"><a href="course-details.php">Bloodborne Pathogens..</a>
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
                                    <span class="rating-count"> (56 Reviews)</span>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <h6 class="current-price mb-0">$80</h6>
                                        <span class="off-price version-02">$160</span>
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
                                    <img src="assets/images/course/medical-course-02.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>07 Lessons</li>
                                    <li><i class="feather-users"></i>01 Students</li>
                                </ul>
                                <h4 class="rbt-card-title"><a href="course-details.php">Fundamentals of HIPAA..</a>
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
                                    <span class="rating-count"> (20 Reviews)</span>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <h6 class="current-price mb-0">$120</h6>
                                        <span class="off-price version-02">$240</span>
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
                                    <img src="assets/images/course/medical-course-03.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>07 Lessons</li>
                                    <li><i class="feather-users"></i>01 Students</li>
                                </ul>
                                <h4 class="rbt-card-title"><a href="course-details.php">Allied Health Sciences</a>
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
                                    <span class="rating-count"> (48 Reviews)</span>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <h6 class="current-price mb-0">$44</h6>
                                        <span class="off-price version-02">$160</span>
                                    </div>
                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->

                </div>

                <div class="row mt--55">
                    <div class="col-lg-12">
                        <div class="load-more-btn text-center">
                            <a class="rbt-btn btn-gradient btn-lg hover-icon-reverse" href="course-with-tab-two.php">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Load More</span>
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
        <div class="rbt-video-area bg-color-white rbt-section-gap overflow-hidden">
            <div class="container">
                <div class="row row--35 align-items-center mt_dec--50">
                    <div class="col-xl-6 col-12 mt--50">
                        <div class="video-popup-wrapper version-02">
                            <div class="v-shape-1 style-02">
                                <img src="assets/images/shape/video-dot-02.png" alt="Shape">
                            </div>
                            <img class="w-100 rbt-radius position-relative" src="assets/images/others/video-11.png" alt="Video Images">
                            <a class="rbt-btn btn-white rounded-player-2 popup-video position-to-top bounced-btn" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
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

        <!-- Start Counter Area -->
        <div class="rbt-counterup-area counterup-section-02 rbt-section-gapBottom">
            <div class="shape-1">
                <img src="assets/images/shape/o-line-arrow.png" alt="Shape">
            </div>
            <div class="container">
                <div class="row align-items-center mb--50">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="title w-600">Creating A Community Of <br> Life Long Learners.</h2>
                            <p class="description has-medium-font-size mt--20 mb--0">There are many variations of passages of the Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                        </div>
                    </div>
                </div>
            </div>
            @@include('counter/counter-5.php')
        </div>
        <!-- End Counter Area -->

        <!-- Start Event Area  -->
        <div class="rbt-event-area bg-gradient-7 rbt-section-gap rbt-section-box">
            <div class="container">
                <div class="row mb--60 g-5 align-items-end">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="section-title text-start">
                            <h6 class="color-white w-500 b2 mb--15">Compass Summit</h6>
                            <h2 class="title w-600 color-white">Join Upcoming Events</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="load-more-btn text-start text-md-end">
                            <a class="rbt-btn btn-border hover-icon-reverse" href="event-grid.php">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text color-white">View All Events</span>
                                <span class="btn-icon color-white"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon color-white"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-12 col-lg-4">
                        <!-- Start Single Event  -->
                        <div class="rbt-card event-grid-card variation-01 rbt-hover p-4">
                            <div class="rbt-card-img">
                                <a href="event-details.php">
                                    <img src="assets/images/event/medical-03.png" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h4 class="rbt-card-title mb--5"><a href="event-details.php">Your Donation helps us</a></h4>
                                <p class="b3 mb--20">The Campaign for the Histudy University is the largest fundraising campaign in history with a historic $1.5 billion goal.</p>
                                <div class="read-more-btn">
                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Become A Donor</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Event  -->
                    </div>
                    <div class="col-12 col-lg-8">
                         <div class="row mt_dec--20">
                            <!-- Start Single Event  -->
                            <div class="col-12 col-sm-6 col-lg-12 mt--20">
                                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover p-4">
                                    <div class="rbt-card-img">
                                        <a href="event-details.php">
                                            <img src="assets/images/event/medical-01.png" alt="Card image">
                                        </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <ul class="rbt-meta">
                                            <li><i class="feather-calendar"></i>11 Jan, 2025</li>
                                            <li><i class="feather-map-pin"></i>IAC Building</li>
                                        </ul>
                                        <h4 class="rbt-card-title"><a href="event-details.php">International Education Fair 2025</a></h4>
                                        <div class="read-more-btn">
                                            <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.php">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Get Ticket</span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Event  -->

                            <!-- Start Single Event  -->
                            <div class="col-12 col-sm-6 col-lg-12 mt--20">
                                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover p-4">
                                    <div class="rbt-card-img">
                                        <a href="event-details.php">
                                            <img src="assets/images/event/medical-02.png" alt="Card image">
                                        </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <ul class="rbt-meta">
                                            <li><i class="feather-map-pin"></i>Vancouver</li>
                                            <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                        </ul>
                                        <h4 class="rbt-card-title"><a href="event-details.php">Painting Art Contest 2020</a></h4>

                                        <div class="read-more-btn">
                                            <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.php">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Get Ticket</span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Event  -->
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Event Area  -->

        <!-- Start Testimonial Area -->
        <div class="rbt-testimonial-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--60">
                        <div class="section-title text-center">
                            <h6>
                                <span class="theme-gradient">Education For Everyone</span>
                            </h6>
                            <h2 class="title w-600">Student's Feedback</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="rbt-accordion-style rbt-accordion-01  accordion">
                            <div class="accordion" id="accordionExamplea1">
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What is Histudy ? How does it work?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExamplea1">
    
                                        <div class="accordion-body card-body">
                                            <p class="mb--15">You can run Histudy easily. Any School, University, College
                                                can be use this
                                                histudy education template for their educational purpose. A university can
                                                be success you.</p>
                                            <p>Run their online leaning management system by histudy education template any
                                                where and time.</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How can I get the customer support?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExamplea1">
                                        <div class="accordion-body card-body">
                                            After purchasing the product need you any support you can be share with
                                            us with sending mail to pixcelsthemes@gmail.com.
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Can I get update regularly and For how long do I get updates?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExamplea1">
                                        <div class="accordion-body card-body">
                                            Yes, We will get update the Histudy. And you can get it any time. Next
                                            time we will comes with more feature. You can be get update for
                                            unlimited times. Our dedicated team works for update.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
    
                        <div class="swiper testimonial-activation-1 rbt-dot-bottom-left pb--60">
                            <div class="swiper-wrapper">
                                <!-- Start Single Testimonial  -->
                                <div class="swiper-slide">
                                    <div class="rbt-testimonial-box no-box-shadow bg-gradient-7 text-white">
                                        <div class="inner">
                                            <div class="clint-info-wrapper">
                                                <div class="thumb">
                                                    <img src="assets/images/testimonial/client-01.png" alt="Clint Images">
                                                </div>
                                                <div class="client-info">
                                                    <h5 class="title">Martha Maldonado</h5>
                                                    <span class="designation">Executive Chairman <i>@ Google</i></span>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus
                                                    velit. Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the</p>
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
                                <div class="swiper-slide">
                                    <div class="rbt-testimonial-box no-box-shadow bg-gradient-7 text-white">
                                        <div class="inner">
                                            <div class="clint-info-wrapper">
                                                <div class="thumb">
                                                    <img src="assets/images/testimonial/client-01.png" alt="Clint Images">
                                                </div>
                                                <div class="client-info">
                                                    <h5 class="title">Martha Maldonado</h5>
                                                    <span class="designation">Executive Chairman <i>@ Google</i></span>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus
                                                    velit. Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the</p>
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
                                <div class="swiper-slide">
                                    <div class="rbt-testimonial-box no-box-shadow bg-gradient-7 text-white">
                                        <div class="inner">
                                            <div class="clint-info-wrapper">
                                                <div class="thumb">
                                                    <img src="assets/images/testimonial/client-01.png" alt="Clint Images">
                                                </div>
                                                <div class="client-info">
                                                    <h5 class="title">Martha Maldonado</h5>
                                                    <span class="designation">Executive Chairman <i>@ Google</i></span>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus
                                                    velit. Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the</p>
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
                            <div class="rbt-swiper-pagination"></div>
                        </div>
    
                    </div>
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
                            <h6><span class="theme-gradient">News & Blog</span></h6>
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
                                <img src="assets/images/blog/medical-blog-01.png" alt="Card image"> </a>
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
                                    <img src="assets/images/blog/medical-blog-02.png" alt="Card image"> </a>
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
                                    <img src="assets/images/blog/medical-blog-03.png" alt="Card image"> </a>
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

        <!-- Start Gallery Area -->
         <div class="rbt-gallery-area rbt-section-gap">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h6><span class="theme-gradient">University</span></h6>
                            <h2 class="title w-600">Our Gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-3 g-sm-4 g-md-5 parent-gallery-container">
                    <a href="assets/images/gallery/health-gallery-01.png" class="child-gallery-single col-lg-6 col-md-6 col-sm-8 col-12">
                        <div class="rbt-gallery">
                            <img class="w-100 radius-10" src="assets/images/gallery/health-gallery-01.png" alt="Gallery Images">
                        </div>
                    </a>
                    <a href="assets/images/gallery/health-gallery-02.jpg" class="child-gallery-single col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="rbt-gallery">
                            <img class="w-100 radius-10" src="assets/images/gallery/health-gallery-02.jpg" alt="Gallery Images">
                        </div>
                    </a>
                    <a href="assets/images/gallery/health-gallery-03.jpg" class="child-gallery-single col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="rbt-gallery">
                            <img class="w-100 radius-10" src="assets/images/gallery/health-gallery-03.jpg" alt="Gallery Images">
                        </div>
                    </a>
                    <a href="assets/images/gallery/health-gallery-04.jpg" class="child-gallery-single col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="rbt-gallery">
                            <img class="w-100 radius-10" src="assets/images/gallery/health-gallery-04.jpg" alt="Gallery Images">
                        </div>
                    </a>
                    <a href="assets/images/gallery/health-gallery-05.png" class="child-gallery-single col-lg-6 col-md-6 col-sm-8 col-12">
                        <div class="rbt-gallery">
                            <img class="w-100 radius-10" src="assets/images/gallery/health-gallery-05.png" alt="Gallery Images">
                        </div>
                    </a>
                    <a href="assets/images/gallery/health-gallery-06.jpg" class="child-gallery-single col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="rbt-gallery">
                            <img class="w-100 radius-10" src="assets/images/gallery/health-gallery-06.jpg" alt="Gallery Images">
                        </div>
                    </a>
                </div>
            </div>
         </div>
        <!-- End Gallery Area -->

        <!-- Start Footer aera -->
        <footer class="rbt-footer footer-style-1 bg-color-darker overflow-hidden rbt-section-box box-footer">
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
                                </ul>

                                <form class="newsletter-form mt--20" action="#">
                                    <h6 class="w-600 color-white">Newsletter</h6>
                                    <p class="description">2000+ Our students are subscribe Around the World.<br> Don’t be shy
                                        introduce yourself!</p>

                                    <div class="form-group right-icon icon-email mb--20">
                                        <label for="email">Enter Your Email Here</label>
                                        <input id="email" type="email">
                                    </div>

                                    <div class="form-group mb--0">
                                        <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                                            <span data-text="Submit Now">Submit Now</span>
                                        </button>
                                    </div>
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