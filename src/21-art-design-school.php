@@include('styles.php',{
"title": "Art Design School"
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
    <header class="rbt-header rbt-header-default">
        <div class="rbt-sticky-placeholder"></div>
        @@include('header/header-6.php', {
        "logo": "logo-black.png",
        "logoLight": "logo-light.png",
        "sticky": "bg-color-white header-sticky",
        "gapSpaceBetween": "",
        "container": "container",
        "navigationEnd": "rbt-navigation-center",
        "btnClass": "rbt-switch-btn btn-gradient btn-sm hover-transform-none",
        "btnText": "Join Us Today",
        })

    </header>
    @@include('header/mobilemenu.php')

    <main class="rbt-main-wrapper">
        <!-- Start Banner Area  -->
        <div class="rbt-banner-area rbt-banner-21">
            <div class="wrapper">
                <div class="shape-wrap">
                    <div class="main-bg">
                        <img src="assets/images/shape/art-banner-bg.png" alt="Banner Shape">
                    </div>
                    <div class="shape-1">
                        <img src="assets/images/shape/art-shape-1.png" alt="Banner Shape">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/shape/art-shape-2.png" alt="Banner Shape">
                    </div>
                    <div class="shape-star">
                        <img src="assets/images/shape/art-star.png" alt="Banner Shape">
                    </div>
                </div>
                <div class="container">
                    <h5 class="subtitle">Grow Your Skills On Trend</h5>
                    <div class="title-wrap">
                        <h1 class="title"><span class="icon scene"><img data-depth="1" src="assets/images/shape/art-text-element-1.png" alt="Text Shape"></span>Art &</h1>
                        <h2 class="title"><span class="icon scene"><img data-depth="2" src="assets/images/shape/art-text-element-2.png" alt="Text Shape"></span><span class="text-outline">Design</span></h2>
                    </div>
                    <h2 class="title school"><span class="icon scene"><img data-depth="1" src="assets/images/shape/art-text-element-3.png" alt="Text Shape"></span>School.</h2>
                    <div class="rbt-banner-bottom">
                        <div class="bg-img">
                            <img src="assets/images/banner/art-banner-bg-2.png" alt="Banner Shape">
                        </div>
                        <div class="main-img">
                            <img data-parallax='{"x": 0, "y": -80}' src="assets/images/banner/art-banner-men.png" alt="Banner Shape">
                        </div>
                    </div>
                    <div class="rbt-offer">
                        <div class="offer-bg">
                            <img src="assets/images/shape/art-o-bg.png" alt="Banner Shape">
                        </div>
                        <div class="offer-shape-1">
                            <!-- <span data-depth="2">
                                <img src="assets/images/shape/art-o-shape-1.png" alt="Banner Shape">
                            </span> -->

                            <div class="star-1">
                                <img src="assets/images/shape/art-o-star-1.png" alt="Star Shape">
                            </div>
                            <div class="star-2">
                                <img src="assets/images/shape/art-o-star-2.png" alt="Star Shape">
                            </div>
                            <div class="star-3">
                                <img src="assets/images/shape/art-o-star-3.png" alt="Star Shape">
                            </div>
                        </div>
                        <div class="offer-shape-2">
                            <img src="assets/images/shape/art-arrow-shape.png" alt="Banner Shape">
                        </div>
                        
                        <div class="satisfied">
                            <span>
                                <img src="assets/images/shape/art-icon.png" alt="Banner Icon">
                            </span>
                            <div class="cont">
                                <h6 class="number"><span class="odometer rbt-font-primary" data-count="99">00</span>%</h6>
                                <span class="number-title">Satisfied</span>
                            </div>
                        </div>
                        <div class="offer-content">
                            <div class="enroll">
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
                                    <h6 class="number"><span class="odometer rbt-font-primary" data-count="36">00</span>K+</h6>
                                    <p class="number-title">Enrolled Students</p>
                                </div>
                            </div>
                            <p class="description">Start today get <span class="parcent">-20%</span> less for first-time <span class="bold">Histudy admission.</span> Don't miss this
                                offer!!</p>
                        </div>
                        <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Get Started Now</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area  -->

        <!-- Start Course Area -->
        <div class="rbt-course-area course-section-01 rbt-section-gapBottom">
            <div class="shapes">
                <div class="shape-1">
                    <img src="assets/images/shape/ac-shape-01.png" alt="Shape">
                </div>
                <div class="shape-2">
                    <img src="assets/images/shape/ac-shape-02.png" alt="Shape">
                </div>
            </div>
            <div class="container">
                <div class="row mb--30">
                    <div class="col-lg-12">
                        <div class="section-title text-center rbt-index-upper">
                            <h6 class="b2 mb--15">
                                <span class="theme-gradient">Our Course</span>
                            </h6>
                            <h2 class="title w-600">Limitless Learning, More <br > <span class="theme-gradient">Possibilities</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row mb--40">
                    <div class="col-lg-12">
                        <ul class="rbt-course-tab-button nav nav-tabs" id="rbt-myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="active" id="development-tab" data-bs-toggle="tab" data-bs-target="#development" type="button" role="tab" aria-controls="development" aria-selected="true"><span class="filter-text">Art & Design</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="ui_ux-tab" data-bs-toggle="tab" data-bs-target="#ui-ux" type="button" role="tab" aria-controls="ui-ux" aria-selected="false"><span class="filter-text">Painting</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false"><span class="filter-text">3D & 2D</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="business-tab" data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab" aria-controls="business" aria-selected="false"><span class="filter-text">Drawing</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="language-tab" data-bs-toggle="tab" data-bs-target="#language" type="button" role="tab" aria-controls="language" aria-selected="false"><span class="filter-text">Sculpture</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="others-tab" data-bs-toggle="tab" data-bs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false"><span class="filter-text">and Others</span></button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row position-relative">
                    <div class="circle-shadow">
                        <img src="assets/images/shape/ac-c-shadow.png" alt="Shadow">
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content" id="rbt-myTabContent">
                            <div class="tab-pane fade active show" id="development" role="tabpanel" aria-labelledby="development-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/art-course-01.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Learn Drawing A to Z</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-02.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Painting Master Class</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
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
                                                    <img src="assets/images/course/art-course-03.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Digital Art</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="/assets/images/course/art-course-04.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Advanced Art Design</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="assets/images/course/art-course-05.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Histudy Artwork</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
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
                                                    <img src="assets/images/course/art-course-06.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Characters & Illustrations</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-02.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Painting Master Class</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
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
                                                    <img src="assets/images/course/art-course-03.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Digital Art</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="/assets/images/course/art-course-04.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Advanced Art Design</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="assets/images/course/art-course-01.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Learn Drawing A to Z</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-06.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Characters & Illustrations</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-05.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Histudy Artwork</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
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
                                                    <img src="assets/images/course/art-course-02.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Painting Master Class</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
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
                                                    <img src="assets/images/course/art-course-05.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Histudy Artwork</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
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
                                                    <img src="assets/images/course/art-course-03.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Digital Art</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="/assets/images/course/art-course-04.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Advanced Art Design</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="assets/images/course/art-course-06.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Characters & Illustrations</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-01.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Learn Drawing A to Z</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-01.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Learn Drawing A to Z</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-03.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Digital Art</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="assets/images/course/art-course-02.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Painting Master Class</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
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
                                                    <img src="/assets/images/course/art-course-04.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Advanced Art Design</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="assets/images/course/art-course-06.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Characters & Illustrations</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-05.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Histudy Artwork</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="language" role="tabpanel" aria-labelledby="language-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/art-course-03.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Digital Art</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="assets/images/course/art-course-02.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Painting Master Class</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
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
                                                    <img src="/assets/images/course/art-course-04.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Advanced Art Design</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="assets/images/course/art-course-01.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Learn Drawing A to Z</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-06.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Characters & Illustrations</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-05.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Histudy Artwork</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="course-details.php">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.php">
                                                    <img src="assets/images/course/art-course-03.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Digital Art</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="/assets/images/course/art-course-04.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Advanced Art Design</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
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
                                                    <img src="assets/images/course/art-course-02.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Painting Master Class</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
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
                                                    <img src="assets/images/course/art-course-06.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Characters & Illustrations</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                                                    <img src="assets/images/course/art-course-05.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Histudy Artwork</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
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
                                                    <img src="assets/images/course/art-course-01.png" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="course-details.php">Learn Drawing A to Z</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
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
                            <a class="rbt-btn btn-gradient btn-lg hover-icon-reverse" href="course-with-tab.php">
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

        <!-- Start Event Area  -->
        <div class="rbt-event-area event-section-01 bg-color-extra2 rbt-section-gap">
            <div class="shapes">
                <div class="shape-1">
                    <img src="assets/images/shape/event-shape-01.png" alt="Shape">
                </div>
                <div class="shape-2">
                    <img src="assets/images/shape/event-shape-02.png" alt="Shape">
                </div>
                <div class="shape-3">
                    <img src="assets/images/shape/event-shape-03.png" alt="Shape">
                </div>
            </div>
            <div class="container">
                <div class="row gx-5 gy-3">
                    <div class="col-12 col-xl-6">
                        <div class="section-title mb--60">
                            <h6 class="b2 mb--15">
                                <span class="theme-gradient">Our Events</span>
                            </h6>
                            <h2 class="title w-600">Upcoming Event <br> For <span class="theme-gradient">Everyone</span></h2>
                        </div>
                        <!-- Start Single Event  -->
                        <div class="rbt-card rbt-card-latest rbt-hover mb-xl-0 mb-4">
                            <div class="rbt-card-img">
                                <a href="event-details.php">
                                    <img src="assets/images/event/latest-01.png" alt="Card image">
                                    <div class="rbt-badge-3 bg-white">
                                        <span>09 Dec</span>
                                        <span>2025</span>
                                    </div>
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-map-pin"></i>IAC Building</li>
                                        <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                    </ul>
                                    <h4 class="rbt-card-title mb--0"><a href="event-details.php"> Elegant Light Box Paper <br> Cut Dioramas</a></h4>
                                </div>

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
                        <!-- End Single Event  -->
                    </div>
                    <div class="col-12 col-xl-6">
                         <div class="row g-3">
                            <!-- Start Single Event  -->
                            <div class="col-12 col-xl-12 col-sm-6">
                                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="event-details.php">
                                            <img src="assets/images/event/grid-type-01.jpg" alt="Card image">
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
                            <div class="col-12 col-xl-12 col-sm-6">
                                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="event-details.php">
                                            <img src="assets/images/event/grid-type-02.jpg" alt="Card image">
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

                            <!-- Start Single Event  -->
                            <div class="col-12 col-xl-12 col-sm-6">
                                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="event-details.php">
                                            <img src="assets/images/event/grid-type-03.jpg" alt="Card image">
                                        </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <ul class="rbt-meta">
                                            <li><i class="feather-map-pin"></i>Paris</li>
                                            <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                        </ul>
                                        <h4 class="rbt-card-title"><a href="event-details.php">Histudy Education Fair 2025</a></h4>

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

        <div class="rbt-testimonial-area testimonial-section-02 bg-color-white rbt-section-gap overflow-hidden">
            <div class="shape-1">
                <img src="assets/images/shape/testimonial-shape-01.png" alt="Shape">
            </div>
            @@include('testimonial/testimonial-1.php')
        </div>

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
                                    <img src="assets/images/blog/art-blog-01.png" alt="Card image">
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
                                    <img src="assets/images/blog/art-blog-02.png" alt="Card image">
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
                                    <img src="assets/images/blog/art-blog-03.png" alt="Card image"> 
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

        <!-- Start Instagram Area -->
        <div class="rbt-instagram-area bg-color-white rbt-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--60">
                        <div class="section-title text-center">
                            <h6 class="b2 mb--15"><span class="theme-gradient">Instagram</span></h6>
                            <h2 class="title w-600">Follow Histudy On <span class="theme-gradient">Instagram</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="assets/images/instagram/instagram-07.png" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="assets/images/instagram/instagram-08.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="assets/images/instagram/instagram-09.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="assets/images/instagram/instagram-10.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="assets/images/instagram/instagram-11.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="assets/images/instagram/instagram-12.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Instagram Area -->

        <!-- Start Footer aera -->
        <footer class="rbt-footer footer-art-section footer-style-1">
            <div class="shapes">
                <div class="shape-1">
                    <img src="assets/images/shape/af-shape-01.png" alt="Shape">
                </div>
                <div class="shape-2">
                    <img src="assets/images/shape/af-shape-02.png" alt="Shape">
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row row--15 mt_dec--30">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
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

                        <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
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
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
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
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="footer-widget">
                                <h5 class="ft-title">Get Contact</h5>
                                <ul class="ft-link">
                                    <li><span>Phone:</span> <a href="#">(406) 555-0120</a></li>
                                    <li><span>E-mail:</span> <a href="mailto:hr@example.com">hr.pixcelsthemes@gmail.com</a></li>
                                    <li><span>Location:</span> North America, USA</li>
                                </ul>
                                <ul class="social-icon social-default icon-naked justify-content-start mt--20">
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
                        </div>
                    </div>
                </div>
            </div>
            @@include('separator.php')
            @@include('footer/copyright.php')
        </footer>
        <!-- End Footer aera -->
    </main>

    @@include('scripts.php')
</body>

</html>