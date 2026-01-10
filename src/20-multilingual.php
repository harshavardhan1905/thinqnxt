@@include('styles.php',{
"title": "Multilingual"
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
        @@include('header/headerTop/headerTop-7.php', {
        "bgColor": "bg-color-transparent",
        "gapSpaceBetween": "header-space-betwween",
        "container": "container",
        "flexDirection": "",
        "btnClass": "rbt-switch-btn btn-gradient btn-xs",
        "btnText": "Call us now",
        })

        @@include('header/header-5.php', {
        "logo": "logo-black.png",
        "logoLight": "logo-light.png",
        "sticky": "bg-color-white header-sticky",
        "gapSpaceBetween": "",
        "container": "container",
        "navigationEnd": "rbt-navigation-center",
        "btnClass": "rbt-switch-btn btn-gradient btn-sm hover-transform-none",
        "btnText": "Join Now",
        "transparent": "shadow-none",
        })

    </header>
    @@include('header/mobilemenu.php')

    <main class="rbt-main-wrapper">
        <!-- Start Banner Area  -->
        <div class="rbt-banner-area rbt-banner-20 position-relative">
            <div class="wrapper">
                <div class="circle-sd-wrapper">
                    <div class="circle-shadow-1">
                        <img src="assets/images/shape/shadow-1.png" alt="Bannder Shadow">
                    </div>
                    <div class="circle-shadow-2">
                        <img src="assets/images/shape/shadow-2.png" alt="Bannder Shadow">
                    </div>
                    <div class="circle-shadow-3">
                        <img src="assets/images/shape/shadow-3.png" alt="Bannder Shadow">
                    </div>
                </div>
                <div class="shapes-wrapper">
                    <div class="curve-line-1">
                        <img src="assets/images/shape/curve-line-1.png" alt="Banner Line">
                    </div>
                    <div class="curve-line-2">
                        <img src="assets/images/shape/curve-line-2.png" alt="Banner Line">
                    </div>
                    <div class="curve-line-3">
                        <img src="assets/images/shape/curve-line-3.png" alt="Banner Line">
                    </div>
                    <div class="curve-line-4">
                        <img src="assets/images/shape/curve-line-4.png" alt="Banner Line">
                    </div>
                    <div class="shape-hand scene">
                        <span data-depth="2">
                            <img src="assets/images/shape/hand-cap.png" alt="Banner hand">
                        </span>
                    </div>
                    <div class="dot-bg">
                        <img src="assets/images/shape/dot-bg.png" alt="Banner Dot">
                    </div>
                    <div class="dot-element scene">
                        <span data-depth="2">
                            <img src="assets/images/shape/dot-element.png" alt="Banner Dot">
                        </span>
                    </div>
                </div>

                <div class="container">
                    <div class="row col-wrap">
                        <div class="col-xl-6">
                            <div class="inner position-relative">
                                <div class="shape-1 scene">
                                    <span data-depth="3">
                                        <img src="assets/images/shape/translate.png" alt="">
                                    </span>
                                </div>
                                <h6 class="subtitle theme-gradient">Multi-Language Academy</h6>
                                <div class="title-in-shape d-flex flex-wrap align-items-center gap-2">
                                    <div class="profile-share">
                                        <a href="#" class="avatar" data-tooltip="Mark Jordan" tabindex="0">
                                            <img src="assets/images/shape/user-1.png" alt="education">
                                        </a>
                                        <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                            <img src="assets/images/shape/avatar-in-text-2.png" alt="education">
                                        </a>
                                    </div>
                                    <h1 class="title">Take Online</h1>
                                </div>
                                <h1 class="title">Language <span>
                                    <img src="assets/images/shape/translate-in-text.png" alt="">
                                    </span> Courses
                                </h1>
                                <h1 class="title">With
                                    <span>
                                        <img src="assets/images/shape/award-in-text.png" alt="">
                                    </span>
                                    Certificate
                                </h1>
                                <p class="description mt--20 mb--40">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                    sint. Velit officia consequat.</p>
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Find Your Course</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="language-world">
                                <div class="world">
                                    <img src="assets/images/shape/world.png" alt="">
                                </div>
                                <div class="flages">
                                    <div class="flag" data-tooltip="Australia" tabindex="0">
                                        <img src="assets/images/shape/flag-australia.png" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Canada" tabindex="0">
                                        <img src="assets/images/shape/flag-canada.png" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="China" tabindex="0">
                                        <img src="assets/images/shape/flag-china.png" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="French" tabindex="0">
                                        <img src="assets/images/shape/flag-french.png" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Germany" tabindex="0">
                                        <img src="assets/images/shape/flag-germany.png" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Japan" tabindex="0">
                                        <img src="assets/images/shape/flag-japan.png" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Korea" tabindex="0">
                                        <img src="assets/images/shape/flag-korea.png" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Pakistan" tabindex="0">
                                        <img src="assets/images/shape/flag-pakistan.png" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Srilonka" tabindex="0">
                                        <img src="assets/images/shape/flag-srilonka.png" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="United Kingdom" tabindex="0">
                                        <img src="assets/images/shape/flag-uk.png" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="United State" tabindex="0">
                                        <img src="assets/images/shape/flag-usa.png" alt="">
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
        <div class="rbt-feature-area rbt-section-gap">
            <div class="container">
                <div class="row g-5">

                    <!-- single item -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-pink">
                                    <img src="assets/images/icons/f-icon-01.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Best Industry <br> Leaders</h6>
                            </div>
                            <p class="description">It is a long established fact that a reader will be distracted by this on readable.</p>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-primary">
                                    <img src="assets/images/icons/f-icon-02.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Learn Courses <br> Online</h6>
                            </div>
                            <p class="description">It is a long established fact that a reader will be distracted by this on readable.</p>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-secondary">
                                    <img src="assets/images/icons/f-icon-03.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Online Book <br> Library</h6>
                            </div>
                            <p class="description">It is a long established fact that a reader will be distracted by this on readable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Feature Area -->

        <!-- Start Course Area -->
        <div class="rbt-course-area rbt-section-gapBottom">
            <div class="container">
                <div class="row mb--30">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h6 class="b2 mb--15"><span class="theme-gradient">Our Course</span></h6>
                            <h2 class="title w-600">Limitless Learning, More <br> <span class="theme-gradient">Possibilities</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row mb--40">
                    <div class="col-lg-12">
                        <ul class="rbt-course-tab-button nav nav-tabs" id="rbt-myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="active" id="development-tab" data-bs-toggle="tab" data-bs-target="#development" type="button" role="tab" aria-controls="development" aria-selected="true">
                                    <span class="icon">
                                        <img src="assets/images/shape/united-kingdom.svg" alt="Flag Icon">
                                    </span>
                                    <span class="btn-text">English</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="ui_ux-tab" data-bs-toggle="tab" data-bs-target="#ui-ux" type="button" role="tab" aria-controls="ui-ux" aria-selected="false">
                                    <span class="icon">
                                        <img src="assets/images/shape/germany.svg" alt="Flag Icon">
                                    </span>
                                    <span class="btn-text">German</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false">
                                    <span class="icon">
                                        <img src="assets/images/shape/south-korea.svg" alt="Flag Icon">
                                    </span>
                                    <span class="btn-text">Korean</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="business-tab" data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab" aria-controls="business" aria-selected="false">
                                    <span class="icon">
                                        <img src="assets/images/shape/france.svg" alt="Flag Icon">
                                    </span>
                                    <span class="btn-text">French</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="language-tab" data-bs-toggle="tab" data-bs-target="#language" type="button" role="tab" aria-controls="language" aria-selected="false">
                                    <span class="icon">
                                        <img src="assets/images/shape/japan.svg" alt="Flag Icon">
                                    </span>
                                    <span class="btn-text">Japanese</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="italian-tab" data-bs-toggle="tab" data-bs-target="#italian" type="button" role="tab" aria-controls="italian" aria-selected="false">
                                    <span class="icon">
                                        <img src="assets/images/shape/italy.svg" alt="Flag Icon">
                                    </span>
                                    <span class="btn-text">Italian</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content" id="rbt-myTabContent">
                            <div class="tab-pane fade active show" id="development" role="tabpanel" aria-labelledby="development-tab">
                                <div class="row g-5">

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-01.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">English Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/united-kingdom.svg" alt="united-kingdom"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-02.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">French Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/france.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-03.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">German Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/germany.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-04.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">italian Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/italy.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-05.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">japan Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/japan.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-06.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">korea Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/south-korea.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="ui-ux" role="tabpanel" aria-labelledby="ui_ux-tab">
                                <div class="row g-5">

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-02.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">French Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/france.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-01.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">English Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/united-kingdom.svg" alt="united-kingdom"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-04.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">italian Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/italy.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-03.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">German Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/germany.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-06.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">korea Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/south-korea.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-05.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">japan Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/japan.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                                <div class="row g-5">

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-03.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">German Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/germany.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-01.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">English Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/united-kingdom.svg" alt="united-kingdom"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-02.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">French Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/france.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-06.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">korea Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/south-korea.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-04.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">italian Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/italy.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-05.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">japan Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/japan.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                                <div class="row g-5">

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-06.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">korea Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/south-korea.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-02.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">French Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/france.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-03.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">German Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/germany.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-05.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">japan Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/japan.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-04.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">italian Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/italy.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-01.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">English Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/united-kingdom.svg" alt="united-kingdom"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="language" role="tabpanel" aria-labelledby="language-tab">
                                <div class="row g-5">

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-01.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">English Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/united-kingdom.svg" alt="united-kingdom"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-05.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">japan Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/japan.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-03.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">German Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/germany.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-04.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">italian Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/italy.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-06.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">korea Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/south-korea.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-02.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">French Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/france.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="italian" role="tabpanel" aria-labelledby="italian-tab">
                                <div class="row g-5">

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-05.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">japan Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/japan.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-02.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">French Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/france.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-03.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">German Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/germany.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-04.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">italian Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/italy.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-01.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">English Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/united-kingdom.svg" alt="united-kingdom"> 
                                                </div>
                                                <div class="card-count">21 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <div class="rbt-card variation-03 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a class="thumbnail-link" href="course-details.php">
                                                    <img src="assets/images/course/language-academy-06.jpg" alt="Card image">
                                                    <span class="rbt-btn btn-white icon-hover btn-md">
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a href="course-details.php">korea Courses</a>
                                                </h5>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="course-details.php"><i>@@include('icons/arrow-right.php')</i></a>
                                                </div>
                                            </div>
                                            <div class="card-information">
                                                <div class="card-flag">
                                                    <img src="assets/images/shape/south-korea.svg" alt="Education Images"> 
                                                </div>
                                                <div class="card-count">5 programs</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt--55">
                    <div class="col-lg-12">
                        <div class="load-more-btn text-center">
                            <a class="rbt-btn btn-gradient btn-lg hover-icon-reverse" href="course-card-3.php">
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

        <!-- Start Countdown Area -->
        <div class="rbt-countdown-area bg_image bg_image--6 bg_image_fixed rbt-section-gap" data-black-overlay="5">
            <div class="container">
                @@include('counter/countdown.php')
            </div>
        </div>
        <!-- End Countdown Area -->

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
                                    <img src="assets/images/blog/language-blog-01.png" alt="Card image">
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
                                    <img src="assets/images/blog/coaching-blog-03.png" alt="Card image"> 
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