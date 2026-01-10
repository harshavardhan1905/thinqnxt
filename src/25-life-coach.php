@@include('styles.php',{
"title": "Life Coach"
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
        @@include('header/header-11.php', {
        "logo": "logo.png",
        "logoLight": "logo-light.png",
        "sticky": "bg-color-white header-sticky",
        "gapSpaceBetween": "shadow-none",
        "container": "container",
        "navigationEnd": "rbt-navigation-center",
        "btnClass": "rbt-switch-btn btn-gradient btn-sm hover-transform-none",
        "btnText": "Join Us Today",
        })

    </header>
    @@include('header/mobilemenu.php')
    @@include('header/offcanvas/cart.php')

    <main class="rbt-main-wrapper">
        <!-- Start Banner Area  -->
        <div class="rbt-banner-area rbt-banner-25">
            <div class="wrapper">
                <div class="shape-wrapper">
                    <div class="shape-1">
                        <img src="assets/images/shape/l-shape-1.png" alt="Banner Shape">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/shape/l-shape-2.png" alt="Banner Shape">
                    </div>
                    <div class="star-1 scene">
                        <span data-depth="2">
                            <img src="assets/images/shape/l-star-1.png" alt="Banner Shape">
                        </span>
                    </div>
                    <div class="star-2 scene">
                        <span data-depth="1">
                            <img src="assets/images/shape/l-star-2.png" alt="Banner Shape">
                        </span>
                    </div>
                    <div class="shape-dot scene">
                    <span data-depth="1">
                        <img src="assets/images/shape/l-shape-dot.png" alt="Banner Shape">
                    </span>
                    </div>
                    <div class="heart">
                        <img src="assets/images/shape/l-heart.png" alt="Banner Shape">
                    </div>
                    <div class="shape-3">
                        <img src="assets/images/shape/l-shadow-2.png" alt="Banner Shape">
                    </div>
                </div>
                <div class="container">
                    <div class="row g-5">
                        <div class="col-xl-5">
                            <div class="inner">
                                <div class="rbt-new-badge rbt-new-badge-one">
                                    <span class="theme-gradient">I am a Life Coach!</span>
                                </div>
                                <h1 class="title">Take Control of <img src="assets/images/shape/l-text-men.png" alt="Banner Text"> Your Life</h1>
                                <p class="description">If you are ready to make positive changes, life coach John can help you achieve that.</p>
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Schedule A Call</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="rbt-banner-25-thumbnails">
                                <div class="shadow-shape">
                                    <img src="assets/images/shape/l-shadow.png" alt="Banner Shape">
                                </div>
                                <div class="main-img">
                                    <img data-parallax='{"x": 0, "y": -80}' src="assets/images/banner/l-banner.png" alt="Banner Men">
                                </div>
                                <div class="rbt-banner-25-satisfied">
                                    <span class="icon">
                                        <img src="assets/images/shape/l-icon.png" alt="Banner Icon">
                                    </span>
                                    <div class="cont">
                                        <h6 class="satis-title">2.6k+</h6>
                                        <span class="satis-subtitle">Satisfied</span>
                                    </div>
                                </div>
                                <div class="rbt-banner-25-review">
                                    <div class="d-flex align-items-center justify-content-between"> 
                                        <div class="raging">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="heart">
                                            <i class="fas fa-heart"></i>
                                        </span>
                                    </div>
                                    <h5 class="review-title">99% Positive Review</h5>
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="parcent">100%</span>
                                        <span class="review-subtitle">Coach Efficiency</span>
                                    </div>
                                </div>
                                <div class="rbt-banner-25-team">
                                    <h6 class="day">30 Days</h6>
                                    <span class="team-title">Organize Your Life With Histudy</span>
                                    <div class="profile-share">
                                        <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                            <img src="assets/images/shape/art-stu-2.png" alt="education">
                                        </a>
                                        <a href="#" class="avatar" data-tooltip="Mark Jordan" tabindex="0">
                                            <img src="assets/images/shape/art-stu-1.png" alt="education">
                                        </a>
                                        <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0">
                                            <img src="assets/images/shape/art-stu-3.png" alt="education">
                                        </a>
                                        <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                            <img src="assets/images/shape/l-team.png" alt="education">
                                        </a>
                                        <div class="number">
                                            <span>4k+</span>
                                        </div>
                                    </div>
                                    <span class="team-join">joined me</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area  -->

        <!-- Start Newsletter Area -->
         <div class="rbt-newsletter-area newsletter-section-02">
            <div class="container newsletter-style-3">
                <div class="shape-1">
                    <img src="assets/images/shape/newsletter-shadow-01.png" alt="Shape">
                </div>
                <div class="shape-union">
                    <img src="assets/images/shape/v-union.png" alt="Shape">
                </div>
                <div class="shape-2"></div>
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="inner text-center">
                            <div class="section-title text-center">
                                <h2 class="title w-600">Get My Free Essential <br> Mindset <span><img src="assets/images/icons/email-icon-01.png" alt="Icon"></span> Exercise</h2>
                            </div>
                            <form action="#" class="newsletter-form-1 mt--30 radius-round">
                                <input class="rbt-border" type="email" placeholder="Enter Your E-Email">
                                <button type="submit" class="rbt-btn btn-md hover-icon-reverse radius-round">
                                    <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Subscribe</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </form>
                            <p class="b3 mt--20">No ads, No trails, No commitments</p>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- End Newsletter Area -->

        <!-- Start Feature Area -->
        <div class="rbt-feature-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">The Practice</span>
                            <h2 class="title w-600">Our Job Is To Help You <br> Grow Mentally</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--60 rbt-index-upper">
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-pink">
                                    <img src="assets/images/icons/f-icon-01.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Positivity Online <br> Course</h6>
                            </div>
                            <p class="description">The  Master of Science in Biomedical Communication is a two-year.</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-primary">
                                    <img src="assets/images/icons/f-icon-02.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Beauty Healthcare <br> Class</h6>
                            </div>
                            <p class="description">The College of Health Sciences recognizes that it is imperative to evaluate.</p>
                        </div>
                    </div>
                    <!-- single card -->
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
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-warning">
                                    <img src="assets/images/icons/f-icon-04.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Time Management <br> System</h6>
                            </div>
                            <p class="description">It is a long established fact that a reader will be distracted by this on readable.</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-success">
                                    <img src="assets/images/icons/f-icon-05.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Marriage <br> Consultations</h6>
                            </div>
                            <p class="description">It is a long established fact that a reader will be distracted by this on readable.</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-info">
                                    <img src="assets/images/icons/f-icon-06.png" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Self-Care <br> Psychology</h6>
                            </div>
                            <p class="description">It is a long established fact that a reader will be distracted by this on readable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Feature Area -->

        <!-- Start Course Area -->
        <div class="rbt-course-area rbt-sec-cir-shadow-1 bg-color-extra2 rbt-section-gap">
            <div class="gradient-shape-top"></div>
            <div class="gradient-shape-bottom"></div>
            <div class="container">
                <div class="row mb--50">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Learn From Me</span>
                            <h2 class="title w-600">Enroll Course Become Better</h2>
                        </div>
                    </div>
                </div>

                <div class="row g-5">

                    <!-- Start Single Course  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-card variation-04 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.php">
                                    <img src="assets/images/course/coach-course-01.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>07 Lessons</li>
                                    <li><i class="feather-users"></i>01 Students</li>
                                </ul>
                                <h4 class="rbt-card-title"><a href="course-details.php">React Front to Back</a>
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
                                    <img src="assets/images/course/coach-course-02.jpg" alt="Card image">
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
                                    <img src="assets/images/course/coach-course-03.jpg" alt="Card image">
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

                <div class="row mt--50">
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

        <!-- Start About Area -->
         <div class="rbt-about-area rbt-section-gap about-style-3">
            <div class="container">
                <div class="row row--40 mt_dec--40">
                    <div class="col-xl-6 col-12 mt--40">
                        <div class="content">
                            <div class="section-title text-start">
                                <span class="subtitle bg-primary-opacity">our approach</span>
                                <h2 class="title w-600">Creative And Helpful <br> <span class="theme-gradient">Online Courses</span></h2>
                                <p class="mt--20">At Histudy University, we are moving boldly - and concertedly - to expand tomorrow's frontiers. We believe that we have the power to shape the future, for the better</p>
                            </div>
                            <div class="row g-5 mt--50">
                                <!-- Start Single Counter  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-counterup style-2">
                                        <div class="inner">
                                            <div class="content">
                                                <h3 class="counter w-500"><span class="odometer" data-count="500">00</span>
                                                </h3>
                                                <h5 class="mb--5 mt--5 w-500">Certification Students</h5>
                                                <span class="b3">Learners &amp; counting</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Counter  -->
                            
                                <!-- Start Single Counter  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-counterup style-2">
                                        <div class="inner">
                                            <div class="content">
                                                <h3 class="counter w-500"><span class="odometer" data-count="800">00</span>
                                                </h3>
                                                <h5 class="mb--5 mt--5 w-500">Successfully Trained</h5>
                                                <span class="b3">Online Course</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>        
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 mt--40">
                        <div class="thumbnail-wrapper">
                            <div class="shape-1">
                                <img src="assets/images/shape/coach-a-dot.png" alt="Shape">
                            </div>
                            <div class="shadow-shape"></div>
                            <div class="experience">
                                <span>
                                    <img src="assets/images/icons/award-gd-01.png" alt="Award Icon">
                                </span>
                                <div class="title-wrap">
                                    <h4 class="number"><span class="odometer rbt-font-primary" data-count="30">00</span><span class="plus">+</span></h4>
                                    <p class="subtitle">Years Experience</p>
                                </div>
                            </div>
                            <div class="thumbnail-1">
                                <img data-parallax='{"x": 0, "y": -30}' src="assets/images/about/coach-a-01.png" alt="Thumbnail">
                            </div>
                            <div class="thumbnail-2">
                                <img data-parallax='{"x": 0, "y": 30}' src="assets/images/about/coach-a-02.png" alt="Thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- End About Area -->

        <!-- Start Video Area -->
         <div class="rbt-video-area rbt-video-banner bg_image bg_image_fixed bg_image--27">
            <div class="row">
                <div class="col-12">
                    <div class="video-popup-wrapper version-02">
                        <a class="rbt-btn btn-white rounded-player-2 popup-video position-to-top with-animation" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                            <span class="play-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
         </div>
        <!-- End Video Area -->

        <!-- Start Countdown Area -->
        <div class="rbt-countdown-area rbt-section-gap">
            <div class="container">
                <div class="row g-5 row--40 align-items-center">
                    <div class="col-lg-6">
                        <div class="inner">
                            <div class="section-title text-start">
                                <span class="subtitle bg-primary-opacity">new program</span>
                                <h2 class="title w-600">Elevate Your Life With Our Seminars</h2>
                                <p class="description mt--15 mb--0">At Histudy University, we are moving boldly - and concertedly - to expand tomorrow's frontiers.</p>
                            </div>
                            <div class="countdown-style-1 version-02 mt--50 bg_image bg_image--6 bg_image_fixed">
                                <div class="countdown" data-date="2025-12-30">
                                    <div class="countdown-container days">
                                        <span class="countdown-value">87</span>
                                        <span class="countdown-heading">Days</span>
                                    </div>
                                    <div class="countdown-container hours">
                                        <span class="countdown-value">23</span>
                                        <span class="countdown-heading">Hours</span>
                                    </div>
                                    <div class="countdown-container minutes">
                                        <span class="countdown-value">38</span>
                                        <span class="countdown-heading">Minutes</span>
                                    </div>
                                    <div class="countdown-container seconds">
                                        <span class="countdown-value">27</span>
                                        <span class="countdown-heading">Seconds</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rbt-contact-form contact-form-style-1 w-100">
                            <div class="section-title text-start">
                                <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                            </div>
                            <h3 class="title w-600">Sign Up for Free Resources</h3>
                            <form id="contact-form" class="w-100">
                                <div class="form-group">
                                    <input name="con_name" type="text">
                                    <label>Name</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input name="con_email" type="email">
                                    <label>Email</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text">
                                    <label>Phone</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-submit-group mt--40">
                                    <button type="submit"
                                        class="rbt-btn btn-gradient hover-icon-reverse w-100">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">GET IT NOW</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Countdown Area -->

        <!-- Start Testimonial Area -->
        <div class="rbt-testimonial-area rbt-sec-cir-shadow-1 bg-color-extra2 rbt-section-gap">
            <div class="gradient-shape-top version-04"></div>
            <div class="gradient-shape-bottom verstion-04"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--60">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                            <h2 class="title w-600">Student's Feedback</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item-3-activation swiper rbt-arrow-between icon-bg-gray rbt-dot-bottom-center pb--60 gutter-swiper-30">
                    <div class="swiper-wrapper">

                        <!-- Start Single Testimonial  -->
                        <div class="swiper-slide">
                            <div class="single-slide">
                                <div class="rbt-testimonial-box">
                                    <div class="inner bg-no-shadow">
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
                        </div>
                        <!-- End Single Testimonial  -->
                    
                        <!-- Start Single Testimonial  -->
                        <div class="swiper-slide">
                            <div class="single-slide">
                                <div class="rbt-testimonial-box">
                                    <div class="inner bg-no-shadow">
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
                        </div>
                        <!-- End Single Testimonial  -->
                    
                        <!-- Start Single Testimonial  -->
                        <div class="swiper-slide">
                            <div class="single-slide">
                                <div class="rbt-testimonial-box">
                                    <div class="inner bg-no-shadow">
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
                        </div>
                        <!-- End Single Testimonial  -->
                    
                        <!-- Start Single Testimonial  -->
                        <div class="swiper-slide">
                            <div class="single-slide">
                                <div class="rbt-testimonial-box">
                                    <div class="inner bg-no-shadow">
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
                        </div>
                        <!-- End Single Testimonial  -->
                    
                        <!-- Start Single Testimonial  -->
                        <div class="swiper-slide">
                            <div class="single-slide">
                                <div class="rbt-testimonial-box">
                                    <div class="inner bg-no-shadow">
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
                        </div>
                        <!-- End Single Testimonial  -->
                    </div>
                    
                    <div class="rbt-swiper-arrow rbt-arrow-left">
                        <div class="custom-overfolow">
                            <i class="rbt-icon feather-arrow-left"></i>
                            <i class="rbt-icon-top feather-arrow-left"></i>
                        </div>
                    </div>
                    
                    <div class="rbt-swiper-arrow rbt-arrow-right">
                        <div class="custom-overfolow">
                            <i class="rbt-icon feather-arrow-right"></i>
                            <i class="rbt-icon-top feather-arrow-right"></i>
                        </div>
                    </div>

                    <div class="rbt-swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- End Testimonial Area -->

        <!-- Start Blog Area -->
        <div class="rbt-rbt-blog-area rbt-section-gap">
            <div class="container">
                <div class="row mb--60 g-5 align-items-end">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">News & Blog</span>
                            <h2 class="title">Have a Look on <span class="theme-gradient">Our Update</span></h2>
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
                                    <img src="assets/images/blog/coach-blog-01.png" alt="Card image"> </a>
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
                                    <img src="assets/images/blog/coach-blog-02.png" alt="Card image">
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

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.php">
                                <img src="assets/images/blog/coach-blog-03.png" alt="Card image"> </a>
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
                </div>
                <!-- End Card Area -->
            </div>
        </div>
        <!-- End Blog Area -->

        <!-- Start Brand Area -->
         <div class="rbt-brand-area brand-section-01 bg-gradient-5 rbt-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--60">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">My trusted Client</span>
                            <h2 class="title w-600">I work in Collaboration <span><img src="assets/images/shape/brand-text-shape-01.png" alt="Shape"></span> With Over 100+ <br> <span class="theme-gradient">Coaches and Companies</span></h2>
                        </div>
                    </div>
                </div>
                <ul class="brand-list brand-style-3 justify-content-start justify-content-lg-between">
                    <li><a href="#"><img src="assets/images/brand/partner-5.webp" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/partner-1.webp" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/partner-6.webp" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/partner-3.webp" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/partner-1.webp" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/partner-6.webp" alt="Brand Image"></a></li>
                </ul>
            </div>
         </div>
        <!-- End Brand Area -->

        @@include('footer/footerThree.php')
        @@include('separator.php')
        @@include('footer/copyright.php')
    </main>

    @@include('scripts.php')
</body>

</html>