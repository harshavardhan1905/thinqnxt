@@include('styles.php',{
"title": "Islamic Center"
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
        })

    </header>
    @@include('header/mobilemenu.php')
    @@include('header/offcanvas/cart.php')

    <main class="rbt-main-wrapper">
        <!-- Start Banner Area -->
        <div class="rbt-banner-area rbt-banner-26">
            <div class="wrapper">
                <div class="shape-wrapper">
                    <div class="shape-1">
                        <img data-parallax='{"x": 0, "y": -80}' src="assets/images/shape/i-shape-1.png" alt="Banner Shape">
                    </div>
                    <div class="shape-2">
                        <img data-parallax='{"x": 0, "y": -80}' src="assets/images/shape/i-shape-2.png" alt="Banner Shape">
                    </div>
                    <div class="star-1 scene">
                        <span data-depth="2">
                            <img src="assets/images/shape/i-star.png" alt="Banner Shape">
                        </span>
                    </div>
                    <div class="moon scene">
                        <span data-depth="1">
                            <img src="assets/images/shape/i-moon.png" alt="Banner Shape">
                        </span>
                    </div>
                    <div class="quran scene">
                        <span data-depth="1">
                            <img src="assets/images/shape/i-book.png" alt="Banner Shape">
                        </span>
                    </div>
                    <div class="banner">
                        <img data-parallax='{"x": 0, "y": 60}' src="assets/images/shape/i-mosque.png" alt="Banner Shape">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="inner">
                                <h6 class="subtitle"><img src="assets/images/shape/i-graduation.png" alt="Banner Icon"> Learn Quran For Peace</h6>
                                <h1 class="title">Guided By The Quran <img src="assets/images/shape/i-text-book.png" alt="Banner Text"> And Sunnah</h1>
                                <p class="description">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. <span class="bold">Velit officia consequat.</span></p>
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Start Learning</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="rbt-banner-26-thumbnails">
                                <div class="shape-dot scene">
                                    <span data-depth="1">
                                        <img src="assets/images/shape/i-dots.png" alt="Banner Shape">
                                    </span>
                                </div>
                                <div class="main-img">
                                    <img src="assets/images/banner/i-arabian.png" alt="Banner Men">
                                </div>
                                <div class="rbt-banner-26-satisfied">
                                    <span class="icon">
                                        <img src="assets/images/shape/l-icon.png" alt="Banner Icon">
                                    </span>
                                    <div class="cont">
                                        <h6 class="satis-title">99%</h6>
                                        <span class="satis-subtitle">Satisfied</span>
                                    </div>
                                </div>
                                <div class="rbt-banner-26-album">
                                    <span class="icon">
                                        <img src="assets/images/shape/i-album.png" alt="Banner Icon">
                                    </span>
                                    <div class="cont">
                                        <h6 class="satis-title">200+</h6>
                                        <span class="satis-subtitle">Video Course</span>
                                    </div>
                                </div>
                                <div class="rbt-banner-26-team">
                                    <div class="team-cont">
                                        <span class="icon">
                                            <img src="assets/images/shape/i-read-quran.png" alt="Banner Icon">
                                        </span>
                                        <div class="cont">
                                            <h6 class="satis-title">36k+</h6>
                                            <span class="satis-subtitle">Active Students</span>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Feature Area -->
         <div class="rbt-feature-area rbt-section-gap3Top">
            <div class="container">
                <div class="row g-5">
                    <!-- card single item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-feature-card-two">
                            <div class="feature-body">
                                <div class="icon bg-color-primary">
                                    <i class="feather-heart"></i>
                                </div>
                                <h5 class="title w-500 mb--10 mt--15">Flexible Classes</h5>
                                <p class="description">The long established fact reader distracted this looking.</p>
                            </div>
                        </div>
                    </div>
                    <!-- card single item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-feature-card-two">
                            <div class="feature-body">
                                <div class="icon bg-color-secondary">
                                    <i class="feather-book"></i>
                                </div>
                                <h5 class="title w-500 mb--10 mt--15">Learn From Anywhere</h5>
                                <p class="description">Amongst buns length hints hands before clothes dismiss.</p>
                            </div>
                        </div>
                    </div>
                    <!-- card single item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-feature-card-two">
                            <div class="feature-body">
                                <div class="icon bg-color-pink">
                                    <i class="feather-award"></i>
                                </div>
                                <h5 class="title w-500 mb--10 mt--15">Skill-Based Learning</h5>
                                <p class="description">Bank lane time sister along peddler nothing down rolling.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- End Feature Area -->

        <!-- Start About Area -->
        <div class="rbt-about-area rbt-section-gap3Top rbt-section-gapBottom">
            <div class="about-style-4 version-03">
                <div class="light-shadow">
                    <img src="assets/images/shape/a-light-shape.png" alt="Shape">
                </div>
                <div class="dubble-shape">
                    <img src="assets/images/shape/a-dubble-shape.png" alt="Shape">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-12">
                            <div class="about-thumb">
                                <div class="stars">
                                   <img src="assets/images/shape/a-all-star.png" alt="">
                                </div>
                                <div class="thumb-1">
                                    <img data-parallax='{"x": 0, "y": -30}' src="assets/images/others/arabian.png" alt="Feature">
                                </div>
                                <div class="thumb-2">
                                    <img data-parallax='{"x": 0, "y": 30}' src="assets/images/others/read-quran.png" alt="Feature">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="content">
                                <div class="section-title">
                                    <span class="subtitle bg-primary-opacity">ABOUT ME</span>
                                    <h2 class="title w-600">Learn <span class="theme-gradient">Online Quran Classes</span> For Kids & Adults
                                    </h2>
                                    <p class="mt--15">At Histudy University, we are moving boldly - and concertedly - to expand tomorrow's frontiers. We believe that we have the power to shape the future, for the better</p>
                                    <ul class="mt--30 mb--50">
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
                                        <li>
                                            <span class="icon bg-primary-opacity">
                                                <i class="feather-heart"></i>
                                            </span>
                                            <span class="text">Affordable Pricing</span>
                                        </li>
                                        <li>
                                            <span class="icon bg-secondary-opacity">
                                                <i class="feather-book"></i>
                                            </span>
                                            <span class="text">Free Trial Classes</span>
                                        </li>
                                    </ul>
                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="about-us-01.php">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Learn More</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->

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
                                    <img src="assets/images/course/quran-course-01.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>12 Lessons</li>
                                    <li><i class="feather-users"></i>258 Students</li>
                                </ul>
                                <h4 class="rbt-card-title"><a href="course-details.php">Learn Quran Online</a>
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
                                    <span class="rating-count"> (120 Reviews)</span>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <h6 class="current-price mb-0">$49</h6>
                                        <span class="off-price version-02">$100</span>
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
                                    <img src="assets/images/course/quran-course-02.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>10 Lessons</li>
                                    <li><i class="feather-users"></i>160 Students</li>
                                </ul>
                                <h4 class="rbt-card-title"><a href="course-details.php">Learn Prayer (Salat)</a>
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
                                    <span class="rating-count"> (86 Reviews)</span>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <h6 class="current-price mb-0">$75</h6>
                                        <span class="off-price version-02">$150</span>
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
                                    <img src="assets/images/course/quran-course-03.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>20 Lessons</li>
                                    <li><i class="feather-users"></i>72 Students</li>
                                </ul>
                                <h4 class="rbt-card-title"><a href="course-details.php">Learn Hadith Change..</a>
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
                                    <span class="rating-count"> (36 Reviews)</span>
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

                <div class="row mt--55">
                    <div class="col-lg-12">
                        <div class="load-more-btn text-center">
                            <a class="rbt-btn btn-gradient btn-lg hover-icon-reverse" href="course-with-tab-two.php">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">View All Course</span>
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

        <!-- Start Accordion Area -->
        <div class="rbt-accordion-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row row--30 mt_dec--30">
                    <div class="col-lg-6 mt--30">
                        <div class="section-title mb--50">
                            <span class="subtitle bg-primary-opacity">Question & Answer</span>
                            <h2 class="title w-600">I Have Been Teaching The Quran For <span class="theme-gradient">20 Years</span></h2>
                        </div>
                        <div class="rbt-accordion-style rbt-accordion-01 accordion">
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
                    <div class="col-lg-6 mt--30">
                        <div class="accordion-thumbnail">
                            <div class="moon">
                                <img src="assets/images/shape/faq-moon.png" alt="Moon">
                            </div>
                            <div class="shape">
                                <img src="assets/images/shape/a-dubble-shape.png" alt="Shape">
                            </div>
                            <div class="thumb-1">
                                <img data-parallax='{"x": 0, "y": -30}' src="assets/images/others/faq-01.png" alt="Thumbnail">
                            </div>
                            <div class="thumb-2">
                                <img data-parallax='{"x": 0, "y": 30}' src="assets/images/others/faq-02.png" alt="Thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Accordion Area -->

        <!-- Start Team Area -->
        <div class="rbt-team-area bg-color-extra2 rbt-section-gap rbt-sec-cir-shadow-1">
            <div class="gradient-shape-top version-03"></div>
            <div class="gradient-shape-bottom version-03"></div>
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Team Members</span>
                            <h2 class="title w-600">Our Expert Instructors</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--15 mt_dec--30">
                    <!-- Start Single Team  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="team">
                            <div class="thumbnail"><img src="assets/images/team/team-11.png" alt="Blog Images">
                            </div>
                            <div class="content">
                                <h4 class="title">Aaron Griffin</h4>
                                <p class="designation">Depertment Head</p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Team  -->
    
                    <!-- Start Single Team  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="team">
                            <div class="thumbnail"><img src="assets/images/team/team-12.png" alt="Blog Images">
                            </div>
                            <div class="content">
                                <h4 class="title">Rafiq Bali</h4>
                                <p class="designation">Depertment Head</p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Team  -->
    
                    <!-- Start Single Team  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="team">
                            <div class="thumbnail"><img src="assets/images/team/team-13.png" alt="Blog Images">
                            </div>
                            <div class="content">
                                <h4 class="title">Fatima Usa</h4>
                                <p class="designation">Depertment Head</p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Team  -->
    
                    <!-- Start Single Team  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="team">
                            <div class="thumbnail"><img src="assets/images/team/team-14.png" alt="Blog Images">
                            </div>
                            <div class="content">
                                <h4 class="title">John Due</h4>
                                <p class="designation">Depertment Head</p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Team  -->
    
                </div>
            </div>
        </div>
        <!-- End Team Area -->

         <!-- Start Testimonial Area -->
        <div class="rbt-testimonial-area rbt-testimonial-shapes-2 bg-color-white rbt-section-gap">
            <div class="shapes">
                <div class="star">
                    <img src="assets/images/shape/t-star.png" alt="Star">
                </div>
                <div class="dubble-shape">
                    <img src="assets/images/shape/a-dubble-shape.png" alt="Shape">
                </div>
            </div>
            <div class="container">
                <div class="row g-5 mb--50 align-items-center">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="section-title">
                            <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                            <h2 class="title w-600">Student's <span class="theme-gradient">Feedback</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="load-more-btn text-start text-md-end">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">View All Reviews</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
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
                            <span class="subtitle bg-primary-opacity">News & Blog</span>
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
                                <img src="assets/images/blog/islamic-blog-01.png" alt="Card image"> </a>
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
                                    <img src="assets/images/blog/islamic-blog-02.png" alt="Card image"> </a>
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
                                    <img src="assets/images/blog/islamic-blog-03.png" alt="Card image"> </a>
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
        <footer class="rbt-footer footer-style-1 footer-islamic bg-color-white overflow-hidden">
            <div class="shape-bg">
                <img data-parallax='{"x": 0, "y": 120}' src="assets/images/shape/islamic-footer-bg.png" alt="Background Image">
            </div>
            <div class="moon">
                <img src="assets/images/shape/i-moon.png" alt="Moon">
            </div>
            <div class="star">
                <img src="assets/images/shape/i-star.png" alt="Star">
            </div>
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
                                    <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="contact.php">
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