@@include('styles.php',{
"title": "Coaching"
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
        "logo": "logo-black.png",
        "logoLight": "logo-light.png",
        "sticky": "bg-color-white header-sticky",
        "gapSpaceBetween": "shadow-none",
        "container": "container",
        "navigationEnd": "rbt-navigation-center",
        "btnClass": "rbt-switch-btn btn-gradient btn-sm hover-transform-none",
        "btnText": "Join Us Today",
        "transparent": "",
        })

    </header>
    @@include('header/mobilemenu.php')
    @@include('header/offcanvas/cart.php')

    <main class="rbt-main-wrapper">
        <!-- Start Banner Area  -->
        <div class="rbt-banner-area rbt-banner-23">
            <div class="wrapper">
                <div class="shape-wrap">
                    <div class="main-bg">
                        <img src="assets/images/shape/co-banner-bg.png" alt="Banner Shape">
                    </div>
                    <div class="bg-shape">
                        <img src="assets/images/shape/co-bg-shape.png" alt="Banner Shape">
                    </div>
                    <div class="light-shadow">
                        <img src="assets/images/shape/co-light-shadow.png" alt="Banner Shape">
                    </div>
                    <div class="shape-gd-1">
                        <img src="assets/images/shape/co-gd-shape-1.png" alt="Banner Shape">
                    </div>
                    <div class="shape-yel-1">
                        <img src="assets/images/shape/co-yel.png" alt="Banner Shape">
                    </div>
                    <div class="shape-arrow-1">
                        <img src="assets/images/shape/co-arrow-1.png" alt="Banner Shape">
                    </div>
                    <div class="shape-union-1">
                        <img src="assets/images/shape/co-union.png" alt="Banner Shape">
                    </div>
                </div>
                <div class="container">
                    <div class="content-wrap">
                        <div class="inner">
                            <h6 class="subtitle">
                                <span class="theme-gradient">Grow Knowledge With ZARA</span>
                            </h6>
                            <h1 class="title">Faster Progress With <span class="theme-gradient"><span class="expert">Expert</span> Guidance</span></h1>
                            <p class="description">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. <span class="bold">Velit officia consequat.</span></p>
                            <div class="action">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Start Learning</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                                <div class="sucess">
                                    <span>
                                        <img src="assets/images/shape/co-icon-1.png" alt="Shape">
                                    </span>
                                    <div>
                                        <h6 class="number">100%</h6>
                                        <span class="sucess-title">Success Rate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-img-wrap">
                            <div class="main-img">
                                <img data-parallax='{"x": 0, "y": 80}' src="assets/images/banner/co-men.png" alt="">
                            </div>
                            <div class="shape">
                                <img src="assets/images/shape/co-men-gradient.png" alt="Shape">
                            </div>
                            <div class="social-media">
                                <div class="social-bg">
                                    <img src="assets/images/shape/co-social-bg.png" alt="Shape">
                                </div>
                                <div class="social-bg-dark">
                                    <img src="assets/images/shape/co-social-bg-dark.png" alt="Shape">
                                </div>
                                <span class="subtitle">Social Midea:</span>
                                <h5 class="social-title">Connect with me <img src="assets/images/shape/co-emoji-1.png" alt=""></h5>
                                <ul class="social-icon social-default mt--15 justify-content-start">
                                    <li>
                                        <a href="#">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area  -->

        <!-- Start Book Area -->
        <div class="rbt-book-area rbt-book-sec-01">
            <div class="container">
                <div class="multi-step-form">
                    <div class="shapes">
                        <div class="shape-1">
                            <img src="assets/images/shape/f-shadow-01.png" alt="Shadow Shape">
                        </div>
                        <div class="shape-2">
                            <img src="assets/images/shape/f-shadow-02.png" alt="Shadow Shape">
                        </div>
                    </div>
                    <div class="section-title text-center">
                        <h2 class="title w-600">Book Your <span class="theme-gradient">Coaching</span> <br> <span class="theme-gradient">Session</span> Now! <img src="assets/images/shape/title-check.png" alt="Check"></h2>
                    </div>
                    <div class="multi-step-form-row mt--40">
                        <div class="multi-step-form-left">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn rbt-active" type="button">
                                    <span class="title">
                                        <span class="icon">
                                            <i class="feather-shopping-bag"></i>
                                        </span> 
                                        Service Selection
                                    </span>
                                    <span class="check-icon">
                                        <i class="feather-check"></i>
                                    </span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button">
                                    <span class="title">
                                        <span class="icon">
                                            <i class="feather-calendar"></i>
                                        </span> 
                                        Date & Time
                                    </span>
                                    <span class="check-icon">
                                        <i class="feather-check"></i>
                                    </span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button">
                                    <span class="title">
                                        <span class="icon">
                                            <i class="feather-info"></i>
                                        </span> 
                                        Your Information
                                    </span>
                                    <span class="check-icon">
                                        <i class="feather-check"></i>
                                    </span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button">
                                    <span class="title">
                                        <span class="icon">
                                            <i class="feather-credit-card"></i>
                                        </span> 
                                        Payments
                                    </span>
                                    <span class="check-icon">
                                        <i class="feather-check"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="contact mt--50">
                                <h6 class="title">Get In Touch</h6>
                                <ul>
                                    <li>
                                        <i class="feather-phone"></i> <a href="tel:+1-202-555-0174">+1-202-555-0174</a>
                                    </li>
                                    <li>
                                        <i class="feather-mail"></i> <a href="mailto:zara.info@gmail.com">zara.info@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="multi-step-form-right">
                            <form class="multisteps-form__form">
                                <div class="multisteps-form__panel rbt-active">
                                  <div class="content">
                                    <h5 class="w-500 mt--20 pl--30">Service Selection</h5>
                                    <hr>
                                    <div class="pt--10 pl--30 pr--30">
                                        <span class="select-label d-block">Service Type:</span>
                                        <div class="rbt-modern-select bg-transparent height-45">
                                            <select class="w-100">
                                                <option>Life Coaching</option>
                                                <option>Education</option>
                                                <option>Course</option>
                                                <option>Art</option>
                                                <option>Web Design</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                                    <div class="btn-wrap d-flex justify-content-end">
                                        <button class="btn btn-primary rbt-btn btn-gradient rbt-step-btn-next" type="button" title="Continue">Continue</button>
                                    </div>
                                </div>
                   
                                <div class="multisteps-form__panel">
                                    <div class="content">
                                        <h5 class="w-500 mt--20 pl--30">Date & Time</h5>
                                        <hr>
                                        <div class="pt--10 pl--30 pr--30">
                                            <span class="select-label d-block">Date:</span>
                                            <input type="date">
                                            <span class="select-label d-block mt--25">Time:</span>
                                            <input type="time">
                                        </div>
                                    </div>
                                    <div class="btn-wrap d-flex justify-content-between">
                                        <button class="btn btn-primary rbt-btn btn-gradient rbt-step-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-primary rbt-btn btn-gradient rbt-step-btn-next" type="button" title="Continue">Continue</button>
                                    </div>
                                </div>

                                <div class="multisteps-form__panel">
                                    <div class="content">
                                        <h5 class="w-500 mt--20 pl--30">Your Information</h5>
                                        <hr>
                                        <div class="pt--10 pl--30 pr--30">
                                            <label class="select-label d-block">Your Name:</label>
                                            <input placeholder="e.g.dhon" type="text">
                                            <label class="select-label d-block mt--25">Your Email:</label>
                                            <input placeholder="e.g.example@mail.com" type="email">
                                        </div>
                                    </div>
                                    <div class="btn-wrap d-flex justify-content-between">
                                        <button class="btn btn-primary rbt-btn btn-gradient rbt-step-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-primary rbt-btn btn-gradient rbt-step-btn-next" type="button" title="Continue">Continue</button>
                                    </div>
                                </div>

                                <div class="multisteps-form__panel">
                                    <div class="content">
                                        <h5 class="w-500 mt--20 pl--30">Payments</h5>
                                        <hr>
                                        <div class="pt--10 pl--30 pr--30">
                                            <label class="select-label d-block">*Payment method:</label>
                                            <div class="rbt-modern-select bg-transparent height-45">
                                                <select class="w-100">
                                                    <option>Credit cards/Debit cards</option>
                                                    <option>PayPal</option>
                                                    <option>Digital wallets</option>
                                                    <option>Apple Pay</option>
                                                    <option>Google Pay</option>
                                                    <option>Bank transfers</option>
                                                </select>
                                            </div>
                                            <label class="select-label d-block mt--25">*Transaction ID:</label>
                                            <input placeholder="e.g.3044539R353TW" required type="text">
                                        </div>
                                    </div>
                                    <div class="btn-wrap d-flex justify-content-between">
                                        <button class="btn btn-primary rbt-btn btn-gradient rbt-step-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-primary rbt-btn btn-gradient" type="submit" title="Submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Book Area -->

        <!-- Start About Area -->
        <div class="rbt-about-area rbt-section-gap overflow-hidden">
            <div class="about-style-4 version-04">
                <div class="shape-2">
                    <img src="assets/images/shape/book-shape-01.png" alt="Shape">
                </div>
                <div class="container">
                    <div class="row row--60 mt_dec--40 align-items-center">
                        <div class="col-xl-5 col-12 mt--40">
                            <div class="about-thumb">
                                <div class="shape-1">
                                    <img src="assets/images/shape/a-dot-01.png" alt="Shape">
                                </div>
                                <div class="since" data-parallax='{"x": -20, "y": 0}'>
                                    <span>
                                        <img src="assets/images/icons/award-gd-01.png" alt="Award Icon">
                                    </span>
                                    <div class="title-wrap">
                                        <h4 class="number"><span class="odometer rbt-font-primary" data-count="1890">0000</span></h4>
                                        <h6 class="subtitle">Since</h6>
                                    </div>
                                </div>
                                <div class="enrolled" data-parallax='{"x": 30, "y": 0}'>
                                    <div class="enrolled-cont">
                                        <span>
                                            <img src="assets/images/shape/o-icon-2.png" alt="">
                                        </span>
                                        <div>
                                            <h6 class="enrolled-title"><span class="odometer rbt-font-primary" data-count="36">00</span>k+</h6>
                                            <p class="enrolled-description">Success Students</p>
                                        </div>
                                    </div>
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
                                            <img src="assets/images/shape/i-team.png" alt="education">
                                        </a>
                                    </div>
                                </div>
                                <div class="thumb-1">
                                    <img src="assets/images/others/coach.png" alt="Thumb">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12 mt--40">
                            <div class="content">
                                <div class="section-title">
                                    <span class="subtitle bg-primary-opacity">About me</span>
                                    <h2 class="title w-600">I Help People to Discover Their True Potential.</h2>
                                </div>
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
                                            <span class="btn-text">Chat With Us</span>
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
        <!-- End About Area -->

        <!-- Start Service Area -->
        <div class="rbt-service-area service-section-01 rbt-section-gap rbt-section-box">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Services</span>
                            <h2 class="title w-600">What i Do For My Client</h2>
                        </div>
                    </div>
                </div>
                <!-- Start Card Area -->
                @@include('service/service-1.php')
                <!-- End Card Area -->
            </div>
        </div>
        <!-- End Service Area -->

        <!-- Start Video Area  -->
        <div class="rbt-video-area bg-color-white rbt-section-gap overflow-hidden">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Work process</span>
                            <h2 class="title w-600">Simple Steps To Success</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--35 align-items-center mt_dec--50">
                    <div class="col-xl-5 col-12 mt--50">
                        <div class="inner">
            
                            <!-- Start Feature List  -->
            
                            <div class="rbt-feature-wrapper">
                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="number">
                                        <span>01</span>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Make a Decision</h6>
                                        <p class="feature-description">It is a long established fact that a reader will be distracted by this on readable content.</p>
                                    </div>
                                </div>
            
                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="number">
                                        <span>02</span>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Schedule a Meeting</h6>
                                        <p class="feature-description">It is a long established fact that a reader will be distracted by this on readable content.</p>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="number">
                                        <span>03</span>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Show Commitment</h6>
                                        <p class="feature-description">It is a long established fact that a reader will be distracted by this on readable content.</p>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="number">
                                        <span>04</span>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Transformation Completed</h6>
                                        <p class="feature-description">It is a long established fact that a reader will be distracted by this on readable content.</p>
                                    </div>
                                </div>
                            </div>
            
                            <!-- End Feature List  -->
                        </div>
                    </div>
                    <div class="col-xl-7 col-12 mt--50">
                        <div class="video-popup-wrapper version-02">
                            <img class="w-100 rbt-radius position-relative" src="assets/images/others/video-12.png" alt="Video Images">
                            <a class="rbt-btn btn-white rounded-player-2 popup-video position-to-top bounced-btn" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                <span class="play-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Video Area  -->

        <!-- Start Ready Area -->
        <div class="rbt-ready-area ready-section-01 rbt-section-gap rbt-section-box bg_image--29 bg_image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Ready to start?</span>
                            <h2 class="title w-600">Self Development Course</h2>
                            <p class="mt--10 description">We believe that we have the power to shape the <br> future, for the better lifelong</p>
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Let’s Talk</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Ready Area -->

        <!-- Start Course Area -->
        <div class="rbt-course-area rbt-section-gap">
            <div class="container">
                <div class="row mb--60 g-5 align-items-end">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">Enroll & Become Better</span>
                            <h2 class="title w-600">Explore Latest Course</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="load-more-btn text-start text-md-end">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="course-masonry.php">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">View All Course</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Start Card Area -->
                <div class="row g-5">
                    <!-- single item -->
                    <div class="col-md-6">
                        <div class="rbt-card variation-01 rbt-hover card-list-2">
                            <div class="rbt-card-img">
                                <a href="course-details.php">
                                    <img src="assets/images/course/course-list-06.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (5 Reviews)</span>
                                    </div>
                                    <div class="rbt-bookmark-btn">
                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                    </div>
                                </div>
                                <h4 class="rbt-card-title"><a href="course-details.php">JS Zero to Mastery</a>
                                </h4>
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>8 Lessons</li>
                                    <li><i class="feather-users"></i>30 Students</li>
                                </ul>
                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by
                                    the readable.</p>

                                <div class="rbt-author-meta mb--20">
                                    <div class="rbt-avater">
                                        <a href="#">
                                            <img src="assets/images/client/avatar-03.png" alt="Sophia Jaymes">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        By <a href="profile.php">Slaughter</a> In <a href="#">Languages</a>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$80</span>
                                        <span class="off-price">$100</span>
                                    </div>
                                    <a class="rbt-btn-link" href="course-details.php">Learn
                                        More<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-md-6">
                        <div class="rbt-card variation-01 rbt-hover card-list-2">
                            <div class="rbt-card-img">
                                <a href="course-details.php">
                                    <img src="assets/images/course/course-list-05.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
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
                                    <div class="rbt-bookmark-btn">
                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                    </div>
                                </div>
                                <h4 class="rbt-card-title"><a href="course-details.php">SQL Beginner Advanced</a>
                                </h4>
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>12 Lessons</li>
                                    <li><i class="feather-users"></i>50 Students</li>
                                </ul>
                                <p class="rbt-card-text">It is a long established fact that a reader will be
                                    distracted
                                    by the readable.</p>
                                <div class="rbt-author-meta mb--20">
                                    <div class="rbt-avater">
                                        <a href="#">
                                            <img src="assets/images/client/avatar-02.png" alt="Sophia Jaymes">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        By <a href="profile.php">Angela</a> In <a href="#">Development</a>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$60</span>
                                        <span class="off-price">$120</span>
                                    </div>
                                    <a class="rbt-btn-link left-icon" href="course-details.php"><i class="feather-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Area -->
            </div>
        </div>
        <!-- End Course Area -->

        <!-- Start Testimonial Area -->
        <div class="rbt-testimonial-area rbt-section-gap rbt-section-box bg-color-extra2 rbt-sec-cir-shadow-1">
            <div class="gradient-shape-top version-02"></div>
            <div class="gradient-shape-bottom version-02"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--60">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Testimonials</span>
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
                <div class="mt--80 position-relative">
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
                                    <img src="assets/images/blog/coaching-blog-01.png" alt="Card image"> </a>
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
                                    <img src="assets/images/blog/coaching-blog-02.png" alt="Card image"> </a>
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
                                <img src="assets/images/blog/coaching-blog-03.png" alt="Card image"> </a>
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

        <!-- Start Newsletter Area -->
        <div class="rbt-newsletter-area newsletter-style-2 bg-gradient-7 rbt-section-gap">
            <div class="container">
                <div class="row row--15 align-items-center">
                    <div class="col-lg-12">
                        <div class="inner text-center">
                            <div class="section-title text-center">
                                <h6 class="color-white b2">Get My Tips Directly</h6>
                                <h2 class="title color-white w-600">Subscribe Our Newsletter</h2>
                                <p class="description color-white mt--20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam explicabo sit est eos earum reprehenderit inventore nam autem corrupti rerum!</p>
                            </div>
                            <form action="#" class="newsletter-form-1 mt--40">
                                <input type="email" placeholder="Enter Your E-Email">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Subscribe</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </form>
                            <span class="note-text color-white mt--20">No ads, No trails, No commitments</span>
            
                            <div class="row row--15 mt--50 justify-content-lg-center">
                                <!-- Start Single Counter -->
                                <div class="col-lg-3 col-md-6 col-sm-6 single-counter">
                                    <div class="rbt-counterup rbt-hover-03 style-2 text-color-white">
                                        <div class="inner">
                                            <div class="content">
                                                <h3 class="counter rv-plus color-white w-600"><span class="odometer rbt-font-primary" data-count="100">00</span>%
                                                </h3>
                                                <h5 class="title color-white">Client Satisfaction</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Counter -->

                                <!-- Start Single Counter -->
                                <div class="col-lg-3 col-md-6 col-sm-6 single-counter mt_mobile--30">
                                    <div class="rbt-counterup rbt-hover-03 style-2 text-color-white">
                                        <div class="inner">
                                            <div class="content">
                                                <h3 class="counter color-white w-600"><span class="odometer rbt-font-primary" data-count="500">00</span>
                                                </h3>
                                                <h5 class="title color-white">Certification Students</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Counter -->
            
                                <!-- Start Single Counter -->
                                <div class="col-lg-3 col-md-6 col-sm-6 single-counter mt_md--30 mt_sm--30 mt_mobile--30">
                                    <div class="rbt-counterup rbt-hover-03 style-2 text-color-white">
                                        <div class="inner">
                                            <div class="content">
                                                <h3 class="counter color-white w-600"><span class="odometer rbt-font-primary" data-count="120">00</span>
                                                </h3>
                                                <h5 class="title color-white">Online Course</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Counter -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter Area -->

        <!-- Start Footer aera -->
        <footer class="rbt-footer footer-style-1">
            <div class="footer-top">
                <div class="container">
                    <div class="row row--15 mt_dec--30">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="footer-widget">
                                <div class="logo logo-dark">
                                    <a href="index.php">
                                        <img src="assets/images/logo/logo-black.png" alt="Edu-cause">
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