@@include('styles.php',{
"title": "ThinqNXT"
})
<?php
require_once __DIR__ . "/config/dbcon.php";

$db_status = $conn ? "✅ Database connection successful" : "❌ Database connection failed";
?>
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
    <!-- Start Campain Area  -->
    <div class="rbt-header-campaign rbt-header-campaign-1 rbt-header-top-news bg-image1 d-none d-lg-block">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner justify-content-center">
                            <div class="content">
                                <span class="rbt-badge variation-02 bg-color-primary color-white radius-round">Early Access Offer: Learn Today, Lead Tomorrow</span>
                                <span class="news-text color-white-off"><img src="assets/images/icons/hand-emojji.svg"
                                        alt="Hand Emojji Images"> Book a live demo session.</span>
                            </div>
                            <div class="right-button">
                                <a class="rbt-btn-link color-white"
                                    href="#">
                                    <span>Book Now <i class="feather-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-close position-right">
            <button class="rbt-round-btn btn-white-off bgsection-activation">
                <i class="feather-x"></i>
            </button>
        </div>
    </div>
    <!-- End Campain Area  -->


    <!-- Start Header Area  -->
    <header class="rbt-header rbt-header-10">
        <div class="rbt-sticky-placeholder"></div>
        <div class="rbt-header-wrapper header-space-betwween header-transparent header-sticky dark-header-transparent">
            <div class="container-fluid">
                <div class="mainbar-row rbt-navigation-start align-items-center">
                    <div class="header-left rbt-header-content">
                        <div class="header-info">
                            <div class="logo logo-dark">
                                <a href="index.php">
                                    <img src="https://thinqnxt.com/wp-content/uploads/2025/04/Thinq-Nxt-logo-png-scaled.png" alt="Education Logo Images">
                                </a>
                            </div>
                            <div class="logo d-none logo-light">
                                <a href="index.php">
                                    <img src="https://thinqnxt.com/wp-content/uploads/2025/04/Thinq-Nxt-logo-png-scaled.png" alt="Education Logo Images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="rbt-main-navigation d-none d-xl-block">
                        @@include('header/nav.php')
                    </div>
                    <div class="header-right">
                        <div class="rbt-btn-wrapper d-none d-xl-block">
                            <a class="rbt-btn  marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none"
                                href="#">
                                <span data-text="Login">Enroll Now</span>
                            </a>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area  -->

    @@include('header/mobilemenu.php')
    <!-- End Mobile Area  -->

    <!-- Start Slider Area  -->
    <div class="rbt-splash-slider d-flex align-items-center">

        <!-- ==========DEMO form============ -->
        <div class="wrapper" style="width: 100% !important">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-xl-8 order-2 order-xl-1">
                        <div class="inner">
                            <div class="banner-top">
                                <div class="banner-badge-top">
                                    <div class="icon">
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                    </div>
                                    <span class="subtitle">39K+ Success Learners</span>
                                </div>                
                            </div>
                            <h4 class="title">Develop industry-ready <br> skills for a successful  <br>career in
                                <span class="cd-headline slide">
                                    <span class="cd-words-wrapper title-span-wrapper" style="width: 387px !important;">
                                        <b class="is-visible theme-gradient" style="font-size: 40px">Data Science,</b>
                                        <b class="is-hidden theme-gradient" style="font-size: 40px">Data Engineering,</b>
                                        <b class="is-hidden theme-gradient" style="font-size: 40px">Data Analytics,</b>
                                        <b class="is-hidden theme-gradient" style="font-size: 40px">Machine Learning,</b>
                                        <b class="is-hidden theme-gradient" style="font-size: 40px">Cloud Technologies.</b>
                                       
                                    </span>
                                </span>
                            </h4>
                            <p class="description">
                                <!-- <a class="btn-md rbt-btn btn-white" href="#" target="_blank" rel="nofollow"> -->
                                <a class="btn-md " href="#" target="_blank" rel="nofollow">
                                    
                                    <span class="cd-headline slide">
                                    <span class="cd-words-wrapper" style="width: 483px;">
                                       <b class="is-visible theme-gradient">
                                            <img class="tool-img" src="assets/images/tools/PANDAS.webp" alt="">
                                            <img class="tool-img" src="assets/images/tools/SQL.jpg" alt="">
                                            <img class="tool-img" src="assets/images/tools/NUMPY-300x300.png" alt="">
                                            <img class="tool-img" src="assets/images/tools/Matplotlib.png" alt="">
                                            <img class="tool-img" src="assets/images/tools/Plotly.png" alt="">
                                            <img class="tool-img" src="assets/images/tools/Power-BI-1.jpeg" alt="">
                                        </b> 
                                        <b class="is-hidden theme-gradient" style="font-size: 40px">
                                                <img class="tool-img" src="assets/images/tools/Apache-Spark.png" alt="">
                                                <img class="tool-img" src="assets/images/tools/Apache_Hive_logo.svg" alt="">
                                                <img class="tool-img" src="assets/images/tools/amazon-redshif.png" alt="">
                                                <img class="tool-img" src="assets/images/tools/Google-BigQuery.webp" alt="">
                                                <img class="tool-img" src="assets/images/tools/microsoft-azure-fabric.webp" alt="">
                                        </b> 
                                        <b class="is-hidden theme-gradient" style="font-size: 40px">
                                            <img class="tool-img" src="assets/images/tools/NUMPY-300x300.png" alt="">
                                            <img class="tool-img" src="assets/images/tools/pandas_py.png" alt="">
                                            <img class="tool-img" src="assets/images/tools/dask.png" alt="">
                                            <img class="tool-img" src="assets/images/tools/polar.jpg" alt="">
                                        </b>
                                        <b class="is-hidden theme-gradient" style="font-size: 40px">
                                            <img class="tool-img" src="assets/images/tools/Scikit-learn.jpeg" alt="">
                                            <img class="tool-img" src="assets/images/tools/XGBoost1.png" alt="">
                                            <img class="tool-img" src="assets/images/tools/LightGBM.png" alt="">
                                            <img class="tool-img" src="assets/images/tools/CatBoost.png" alt="">
                                        </b> 
                                         <b class="is-hidden theme-gradient" style="font-size: 40px">
                                            <img class="tool-img" src="assets/images/tools/AZURE.png" alt="">
                                            <img class="tool-img" src="assets/images/tools/aws.png" alt="">
                                            <img class="tool-img" src="assets/images/tools/Google-Cloud-Platform.jpeg" alt="">
                                            
                                         </b>
                                       
                                    </span>
                                </span>
                                </a>
                            </p>

                            <!-- Course assurance -->
                             <section class="course-highlights">
                                <div class="highlight-item">
                                    <span class="dot"></span>
                                    <div class="text">
                                        <h4><span class="red">100%</span> Online / Offline</h4>
                                        <p>Live Classes</p>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="highlight-item">
                                    <div class="text">
                                        <h4><span class="red">6 - 8</span> Months</h4>
                                        <p>Course duration</p>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="highlight-item">
                                    <div class="text">
                                        <h4><span class="red">100%</span> Job Assurance</h4>
                                        <p>Placement Services</p>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="highlight-item">
                                    <div class="text">
                                        <h4><span class="red">Degree</span> Eligibility</h4>
                                        <p>Graduates & Professionals</p>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4 order-1 order-xl-2">
                        <div class="video-popup-wrapper">
                            <div class="full-width-wrapper">
                                @@include('bookdemo.php')

                            </div>
                            
                            <div class="banner-group-shape">
                                <div class="shape-image scene shape-4">
                                    <span data-depth="2">
                                        <img src="assets/images/splash/icons/shape-4.png" alt="Shape Images">
                                    </span>
                                </div>
                                <div class="shape-image scene shape-5">
                                    <span data-depth="-2">
                                        <img src="assets/images/splash/icons/shape-5.png" alt="Shape Images">
                                    </span>
                                </div>
                                <div class="shape-image scene shape-6">
                                    <span data-depth="5">
                                        <img src="assets/images/splash/icons/shape-6.png" alt="Shape Images">
                                    </span>
                                </div>
                                <div class="shape-image scene shape-7">
                                    <span data-depth="-3">
                                        <img src="assets/images/splash/icons/shape-7.png" alt="Shape Images">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>

        <div class="shape-wrapper">
            <div class="shape-image shape-1">
                <img src="assets/images/splash/icons/shape-1.png" alt="Shape Images">
            </div>
            <div class="shape-image shape-2">
                <img src="assets/images/splash/icons/shape-2.png" alt="Shape Images">
            </div>
            <div class="shape-image shape-3">
                <img src="assets/images/splash/icons/shape-3.png" alt="Shape Images">
            </div>
        </div>
    </div>
    <!-- End Slider Area  -->

    <div class="col-lg-12 rbt-splash-courses bg-color-white">
       
         <div class="section-title text-center">
                            <!-- <span class="subtitle bg-secondary-opacity">All in One Course</span> -->
                            <h2 class="title">FULL STACK DATA SCIENCE</h2>
                        </div>

                    <div class="row">
                        <div class="splash-service-main position-relative">
                            <div class="service-wrapper service-white">
                                <div class="row g-0 five-cols justify-content-center">

                                    <div class="col-lg-6 col-xl-4 col-md-6 col-sm-6 col-12 service__style--column">
                                        <div class="service service__style--1">
                                            <div class="icon">
                                                <img src="assets/images/icons/icons-01.png" alt="Icon Images">
                                                <h4 class="title">DATA SCIENCE</h4>
                                            </div>
                                            <div class="content">
                                                
                                                <p>Statistics, Python & SQL, Practical data problem solving, Learn from industry professionals, Designed for career switchers.</p>
                                            </div>

                                              <!-- Arrow button -->
                                                <div class="card-arrow">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path d="M7 17L17 7M7 7h10v10"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-xl-4 col-md-6 col-sm-6 col-12 service__style--column">
                                        <div class="service service__style--1">
                                            <div class="icon">
                                                <img src="assets/images/icons/icons-02.png" alt="Icon Images">
                                                 <h4 class="title">DATA ENGINEERING</h4>
                                            </div>
                                            <div class="content">
                                               
                                                <p>Spark, Hadoop & Kafka, Build scalable data systems, Work with AWS & databases, Prepare for Data Engineer roles.</p>
                                            </div>
                                            <!-- Arrow button -->
                                                <div class="card-arrow">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path d="M7 17L17 7M7 7h10v10"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-xl-4 col-md-6 col-sm-6 col-12 service__style--column">
                                        <div class="service service__style--1">
                                            <div class="icon">
                                                <img src="assets/images/icons/icons-03.png" alt="Icon Images">
                                                <h4 class="title">DATA ANALYST</h4>
                                            </div>
                                            <div class="content">
                                                
                                                <p>Excel, SQL & BI tools, Data-driven decision making, Real business scenarios, Analyst-focused preparation.</p>
                                            </div>
                                            <!-- Arrow button -->
                                                <div class="card-arrow">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path d="M7 17L17 7M7 7h10v10"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-xl-4 col-md-6 col-sm-6 col-12 service__style--column">
                                        <div class="service service__style--1">
                                            <div class="icon">
                                                <img src="assets/images/icons/icon-aiml.png" alt="Icon Images">
                                                <h4 class="title">AI / ML</h4>
                                            </div>
                                            <div class="content">
                                                
                                                <p>Core machine learning concepts, Neural networks & AI models, Production-ready ML systems, AI & ML Engineer careers.
                                                </p>
                                            </div>
                                            <!-- Arrow button -->
                                                <div class="card-arrow">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path d="M7 17L17 7M7 7h10v10"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                    <a href="#"></a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4 col-md-6 col-sm-6 col-12 service__style--column">
                                        <div class="service service__style--1">
                                            <div class="icon">
                                                <img src="assets/images/icons/icons-04.png" alt="Icon Images">
                                                <h4 class="title">GEN AI</h4>
                                            </div>
                                            <div class="content">
                                                
                                                <p>LLMs & prompt engineering, Chatbots & AI applications, Automation & content generation, Next-gen AI career paths.
                                                </p>
                                            </div>
                                            <!-- Arrow button -->
                                                <div class="card-arrow">
                                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                                        <path d="M7 17L17 7M7 7h10v10"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <!-- Start Coding Quality Area  -->
    <div class="rbt-splash-coding-quality-area bg-color-white rbt-section-gapBottom">
        <div class="wrapper">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <!-- <span class="subtitle bg-secondary-opacity">All in One Course</span> -->
                            <h2 class="title">Why Choose ThinqNxt.</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <!-- Start Top Feature  -->
                    <div class="col-lg-3 col-md-8 col-12" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="top-features-box h-100 text-center">
                            <div class="inner">
                                <div class="content">
                                    <span class="pre-title text-uppercase">Industry-Driven Curriculum</span>
                                    <h5 class="title">Real-world learning Real impact.</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="assets/images/splash/topfeature/01.png" alt="Image">
                                </div>
                                <div class="rbt-badge-group">
                                    <ul>
                                        <li><span class="rbt-badge">Skills that match real job roles</span></li>
                                        <li><span class="rbt-badge">Aligned with current tech & hiring</span></li>
                                        <li><span class="rbt-badge">Continuously updated learning paths</span></li>
                                        <li><span class="rbt-badge">Designed with real industry use-cases</span></li>
                                        <li><span class="rbt-badge">“Learn what the industry actually uses”</span></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="shape-image">
                                <img src="assets/images/splash/icons/sun-shadow-right.png" alt="Shape Images">
                            </div>
                        </div>
                    </div>
                    <!-- End Top Feature  -->

                    <!-- Start Top Feature  -->
                    <div class="col-lg-3 col-md-8 col-12" data-sal-delay="200" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="top-features-box h-100 text-center ">
                            <div class="inner">
                                <div class="content">
                                    <span class="pre-title text-uppercase">Hands-On Project</span>
                                    <h5 class="title">Learning by doing—from day one.</h5>
                                </div>

                                <div class="thumbnail">
                                    <img src="assets/images/splash/topfeature/02.png" alt="Image">
                                </div>
                                <div class="rbt-badge-group">
                                    <ul>
                                        <li><span class="rbt-badge">Live, guided projects</span></li>
                                        <li><span class="rbt-badge">Real-world problem solving</span></li>
                                        <li><span class="rbt-badge">Practical assignments & labs</span></li>
                                        <li><span class="rbt-badge">Portfolio-ready project outcomes</span></li>
                                        <li><span class="rbt-badge">“You don’t just learn it—you build it”</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shape-image">
                                <img src="assets/images/splash/icons/sun-shadow-right-2.png" alt="Shape Images">
                            </div>
                        </div>
                    </div>
                    <!-- End Top Feature  -->

                    <!-- Start Top Feature  -->
                    <div class="col-lg-3 col-md-8 col-12" data-sal-delay="250" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="top-features-box h-100 text-center">
                            <div class="inner">
                                <div class="content">
                                    <span class="pre-title text-uppercase">Expert Mentors </span>
                                    <h5 class="title">Learn from Experienced professionals.</h5>
                                </div>

                                <div class="thumbnail">
                                    <img src="assets/images/splash/topfeature/03.png" alt="Image">
                                </div>

                                <div class="rbt-badge-group">
                                    <ul>
                                        <li><span class="rbt-badge">Career-oriented guidance</span></li>
                                        <li><span class="rbt-badge">Clear concept explanation</span></li>
                                        <li><span class="rbt-badge">Regular doubt-clearing sessions</span></li>
                                        <li><span class="rbt-badge">Mentors with real industry experience</span></li>
                                        <li><span class="rbt-badge">“Learn from people who’ve been there”</span></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="shape-image">
                                <img src="assets/images/splash/icons/sun-shadow-right-3.png" alt="Shape Images">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-8 col-12" data-sal-delay="250" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="top-features-box h-100 text-center ">
                            <div class="inner">
                                <div class="content">
                                    <span class="pre-title text-uppercase">Career Support</span>
                                    <h5 class="title">Support focused on outcomes.</h5>
                                </div>

                                <div class="thumbnail">
                                    <img src="assets/images/icons/card-icon-12.png" alt="Image">
                                </div>

                                <div class="rbt-badge-group">
                                    <ul>
                                        <li><span class="rbt-badge">Long-term career mentoring</span> <br></li>
                                        <li><span class="rbt-badge">Career guidance & referrals</span> <br></li>
                                        <li><span class="rbt-badge">Resume & LinkedIn optimization</span> <br></li>
                                        <li><span class="rbt-badge">Interview preparation & mock sessions</span> <br></li>
                                        <li><span class="rbt-badge">“Success is the final goal”</span> <br></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="shape-image">
                                <img src="assets/images/splash/icons/sun-shadow-right-3.png" alt="Shape Images">
                            </div>
                        </div>
                    </div>
                    <!-- End Top Feature  -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Coding Quality Area  -->


    <!-- Start Enrollment & Kickstat -->
<section class="program-highlights transparent">
    <div class="container">

        <div class="section-head text-center">
            <h2>
                Enroll & Kickstart Your <span>Journey</span>
            </h2>
            <p>Everything you need to succeed, structured for real outcomes.</p>
        </div>

        <div class="highlights-grid">

            <!-- Left Details -->
            <div class="highlights-list">
                <div class="highlight-item">
                    <h4>500+ Hours</h4>
                    <p>Live classes with industry experts.</p>
                </div>

                <div class="highlight-item">
                    <h4>30+ Projects</h4>
                    <p>Build a portfolio recruiters love.</p>
                </div>

                <div class="highlight-item">
                    <h4>1:1 Sessions</h4>
                    <p>Personal mentorship & mock interviews.</p>
                </div>

                <div class="highlight-item">
                    <h4>Lifetime Access</h4>
                    <p>Keep learning forever.</p>
                </div>
                <div class="highlight-item download-btn-div">
                    <button class='brochure-btn'>Download Brochure</button>
                  <span>Next will start on 13th Jan '26</span>
                </div>
            </div>
            
            <!-- Right Stats -->
            <div class="highlight-visual">
                <div class="stat-card">
                    <h3>40 LPA</h3>
                    <span>Highest Package</span>
                </div>

                <div class="stat-card">
                    <h3>1200+</h3>
                    <span>Hiring Partners</span>
                </div>

                <div class="stat-card">
                    <h3>8 LPA</h3>
                    <span>Average Salary</span>
                </div>
            </div>

        </div>

    </div>
</section>

        


     <!-- End Enrollment & Kickstat -->

    <!-- Start Advance Tab  -->
    <div class="rbt-advance-tab-area splash-layout-presentation pb--40 bg-color-white">
        <div class="wrapper">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <!-- <span class="subtitle bg-secondary-opacity">You Can Customize Everything
                            </span> -->
                            <h2 class="title">Take your Career to The <span class="theme-gradient"> Next Level!</span>
                            </h2>
                            <p class="description mt--20">ThinqNxt will support you.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="splash-layout-presentation-box">
                            <div class="row g-5">
                                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt_md--30 mt_sm--30 order-2 order-lg-1">

                                    <div class="section-title text-start mb--60">
                                        <span class="subtitle bg-primary-opacity">All-in-One for Career Growth
                                        </span>
                                        <h4 class="title">Career Launchpad & Resume Building .</h4>
                                    </div>

                                    <div class="advance-tab-button advance-tab-button-1">
                                        <ul class="nav nav-tabs splash-nav-tabs tab-button-list" id="splashLayoutTab"
                                            role="tablist">
                                            <li class="nav-item active-nav" role="presentation">
                                                <a href="#" class="nav-link tab-button active" id="layouttab1-tab"
                                                    data-bs-toggle="tab" data-bs-target="#layouttab1" role="tab"
                                                    aria-controls="layouttab1" aria-selected="false">
                                                    <div class="tab">
                                                        <h4 class="title"><img
                                                                src="assets/images/icons/Mock-HR.png"
                                                                alt="advance-tab-image"> Mock HR.</h4>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item" role="presentation">
                                                <a href="#" class="nav-link tab-button" id="layouttab2-tab"
                                                    data-bs-toggle="tab" data-bs-target="#layouttab2" role="tab"
                                                    aria-controls="layouttab2" aria-selected="true">
                                                    <div class="tab">
                                                        <h4 class="title"><img
                                                                src="assets/images/splash/icons/header.png"
                                                                alt="advance-tab-image">Header layout.</h4>   
                                                        </div>
                                                </a>
                                            </li>

                                            <li class="nav-item" role="presentation">
                                                <a href="#" class="nav-link tab-button" id="layouttab3-tab"
                                                    data-bs-toggle="tab" data-bs-target="#layouttab3" role="tab"
                                                    aria-controls="layouttab3" aria-selected="false">
                                                    <div class="tab">
                                                        <h4 class="title"><img
                                                                src="assets/images/splash/icons/curve.png"
                                                                alt="advance-tab-image"> Complete Design Toolkit.</h4>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item" role="presentation">
                                                <a href="#" class="nav-link tab-button" id="layouttab4-tab"
                                                    data-bs-toggle="tab" data-bs-target="#layouttab4" role="tab"
                                                    aria-controls="layouttab4" aria-selected="false">
                                                    <div class="tab">
                                                        <h4 class="title"><img
                                                                src="assets/images/splash/icons/web-programming.png"
                                                                alt="advance-tab-image"> Infinitely Flexible</h4>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 col-12 order-1 order-lg-2">
                                    <div class="tab-content">
                                        <div class="tab-pane fade advance-tab-content-1 active show" id="layouttab1"
                                            role="tabpanel" aria-labelledby="layouttab1-tab">
                                            <div class="thumbnail">
                                                <img src="assets/images/splash/courses-layout.png"
                                                    alt="advance-tab-image">
                                            </div>

                                        </div>
                                        <div class="tab-pane fade advance-tab-content-1" id="layouttab2" role="tabpanel"
                                            aria-labelledby="layouttab2-tab">
                                            <div class="thumbnail">
                                                <img src="assets/images/splash/header-layout.png"
                                                    alt="advance-tab-image">
                                            </div>
                                        </div>

                                        <div class="tab-pane fade advance-tab-content-1" id="layouttab3" role="tabpanel"
                                            aria-labelledby="layouttab3-tab">
                                            <div class="thumbnail">
                                                <img src="assets/images/splash/elements.png" alt="advance-tab-image">
                                            </div>
                                        </div>

                                        <div class="tab-pane fade advance-tab-content-1" id="layouttab4" role="tabpanel"
                                            aria-labelledby="layouttab4-tab">
                                            <div class="thumbnail">
                                                <img src="assets/images/splash/code.png" alt="advance-tab-image">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <ul class="plan-offer-list d-block d-sm-flex justify-content-center">
                            <li><i class="feather-check"></i>Free future template updates</li>
                            <li><i class="feather-check"></i>Mix and Match Section Blocks</li>
                            <li><i class="feather-check"></i>Quality checked by Envato</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Advance Tab  -->

    <!-- Start Elements Presentation Area  -->
    <div class="rbt-elements-presentation-area overflow-hidden bg-color-white rbt-section-gapBottom pt--80">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">You don't need any external plugins.</span>
                        <h2 class="title"><strong class="theme-gradient">100+</strong> Elements included.</h2>
                    </div>
                </div>
            </div>

            <div class="scroll-animation-all-wrapper">
                <div class="scroll-animation-wrapper mt--30">
                    <div class="scroll-animation scroll-right-left">
                        <!-- Start Single Testimonial  -->
                        <div class="single-column-100">
                            <div class="rbt-categori-list">
                                <a href="#"><i class="feather-credit-card"></i> Accordion</a>
                                <a href="#"><i class="feather-folder"></i> Advance Tab</a>
                                <a href="#"><i class="feather-heart"></i> Brand</a>
                                <a href="#"><i class="feather-link-2"></i> Button</a>
                                <a href="#"><i class="feather-award"></i> Badge</a>
                                <a href="#"><i class="feather-layers"></i> Card</a>
                                <a href="#"><i class="feather-log-in"></i> Call To Action</a>
                                <a href="#"><i class="feather-hash"></i> Counter</a>
                                <a href="#"><i class="feather-grid"></i> Categories</a>
                                <a href="#"><i class="feather-mail"></i> Newsletter</a>
                                <a href="#"><i class="feather-users"></i> Team</a>
                                <a href="#"><i class="feather-twitter"></i> Social</a>
                                <a href="#"><i class="feather-image"></i> Gallery</a>
                                <a href="#"><i class="feather-dollar-sign"></i> Pricing</a>
                                <a href="#"><i class="feather-percent"></i> Progressbar</a>
                                <a href="#"><i class="feather-message-square"></i> Testimonial</a>
                                <a href="#"><i class="feather-layout"></i> Service</a>
                                <a href="#"><i class="feather-map"></i> Split Area</a>
                                <a href="#"><i class="feather-search"></i> Search Style</a>
                                <a href="#"><i class="feather-instagram"></i> Instagram Style</a>
                                <a href="#"><i class="feather-list"></i> List Style</a>
                                <a href="#"><i class="feather-airplay"></i> Creative Tab</a>
                            </div>
                        </div>
                        <!-- End Single Testimonial  -->
                    </div>
                </div>

                <div class="scroll-animation-wrapper mt--30">
                    <div class="scroll-animation scroll-left-right">
                        <!-- Start Single Testimonial  -->
                        <div class="single-column-100">
                            <div class="rbt-categori-list">
                                <a href="#"><i class="feather-type"></i> Heading</a>
                                <a href="#"><i class="feather-align-center"></i> Section Title</a>
                                <a href="#"><i class="feather-arrow-right-circle"></i> Slider</a>
                                <a href="#"><i class="feather-rotate-ccw"></i> Flip Box</a>
                                <a href="#"><i class="feather-camera"></i> Fancy Image</a>
                                <a href="#"><i class="feather-chrome"></i> Group Image</a>
                                <a href="#"><i class="feather-circle"></i> Circle Badge</a>
                                <a href="#"><i class="feather-toggle-left"></i> Creative Badge</a>
                                <a href="#"><i class="feather-link"></i> Animated Button</a>
                                <a href="#"><i class="feather-globe"></i> Language Switcher</a>
                                <a href="#"><i class="feather-gift"></i> Offer Banner</a>
                                <a href="#"><i class="feather-video"></i> Video Popup</a>
                                <a href="#"><i class="feather-clock"></i> Timeline</a>
                                <a href="#"><i class="feather-code"></i> Carousel Testimonial</a>
                                <a href="#"><i class="feather-award"></i> Event Item</a>
                                <a href="#"><i class="feather-user-check"></i> Team Member</a>
                                <a href="#"><i class="feather-star"></i> Review</a>
                                <a href="#"><i class="feather-voicemail"></i> Subscribe</a>
                                <a href="#"><i class="feather-jash"></i> Counter</a>
                                <a href="#"><i class="feather-skip-back"></i> Go to Top</a>
                                <a href="#"><i class="feather-filter"></i> Isotope Filter</a>
                                <a href="#"><i class="feather-bookmark"></i> Bookmark</a>
                            </div>
                        </div>
                        <!-- End Single Testimonial  -->
                    </div>
                </div>

                <div class="scroll-animation-wrapper mt--30">
                    <div class="scroll-animation scroll-right-left">
                        <!-- Start Single Testimonial  -->
                        <div class="single-column-100">
                            <div class="rbt-categori-list">
                                <a href="#"><i class="feather-bold"></i> Animated Big Text</a>
                                <a href="#"><i class="feather-user-plus"></i> Instructor Group</a>
                                <a href="#"><i class="feather-heart"></i> Offer Badge</a>
                                <a href="#"><i class="feather-file-text"></i> Exam Preparation</a>
                                <a href="#"><i class="feather-box"></i> Modal</a>
                                <a href="#"><i class="feather-copy"></i> Pricing Switcher</a>
                                <a href="#"><i class="feather-database"></i> Step Box</a>
                                <a href="#"><i class="feather-credit-card"></i> Tuition & Fees Table</a>
                                <a href="#"><i class="feather-bar-chart"></i> Single Pricing</a>
                                <a href="#"><i class="feather-more-horizontal"></i> Contact From</a>
                                <a href="#"><i class="feather-watch"></i>Countdown Timer</a>
                                <a href="#"><i class="feather-pie-chart"></i> Radial Progress</a>
                                <a href="#"><i class="feather-command"></i> Parallax</a>
                                <a href="#"><i class="feather-search"></i> Advance Search</a>
                                <a href="#"><i class="feather-tv"></i> Content Box</a>
                                <a href="#"><i class="feather-shopping-cart"></i> Minicart</a>
                                <a href="#"><i class="feather-sidebar"></i> Offcanvas</a>
                                <a href="#"><i class="feather-chevrons-right"></i> Image Carousel</a>
                                <a href="#"><i class="feather-italic"></i> Sliding Heading</a>
                                <a href="#"><i class="feather-paperclip"></i> Tag cloud</a>
                                <a href="#"><i class="feather-menu"></i> Hamburger</a>
                                <a href="#"><i class="feather-zap"></i> Advance Dropdown</a>
                                <a href="#"><i class="feather-skip-forward"></i> Pagination</a>
                            </div>
                        </div>
                        <!-- End Single Testimonial  -->
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mt--30">
                        <span class="rbt-title-style-2">Save your time and money by Using Ready Elements</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Elements Presentation Area  -->

    <!-- Start Home Demo Area  -->
    <div class="home-demo-area rbt-section-gap bg-gradient-6 splash-masonary-wrapper-activation">
        <div class="wrapper plr--120 plr_lg--30 plr_md--30 plr_sm--30 plr_mobile--15">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-6 offset-xl-3">
                    <div
                        class="section-title text-center has-section-before-title mb--150 mt--50 mb_lg--100 mb_md--100 mb_sm--100">
                        <h2 class="rbt-display-1 theme-gradient">World-Class Stunning Demos</h2>
                        <h3 class="title">Best-in-class designs to get you started. <span class="heading-opacity">Use
                                any demo or template for education website. You can mix and match all the demos and
                                templates.</span>
                        </h3>
                        <div class="indicator-icon ">
                            <img class="edu_bounce_loop" src="assets/images/icons/arrow-down.png" alt="arrow down icon">
                        </div>
                        <p class="description has-medium-font-size mt--20">Create a complete education website with a
                            lots of demo page and 250+ section blocks to create a unique site.
                        </p>
                        <div class="section-before-title theme-gradient new-big-heading-gradient">26+</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="rbt-portfolio-filter filter-button-default messonry-button text-start justify-content-center mb--5 mb_md--30 mb_sm--30">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Demos</span><span
                                class="course-number">26</span></button>
                        <button data-filter=".marketplace" class=""><span class="filter-text">Marketplace</span><span
                                class="course-number">13</span></button>
                        <button data-filter=".university"><span class="filter-text">University</span><span
                                class="course-number">14</span></button>
                        <button data-filter=".instructor"><span class="filter-text">Instructor</span><span
                                class="course-number">12</span></button>
                        <button data-filter=".singlecourse"><span class="filter-text">Single Course</span><span
                                class="course-number">02</span></button>
                        <button data-filter=".career"><span class="filter-text">Career Trenning</span><span
                                class="course-number">13</span></button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="demo-presentation-mesonry splash-mesonry-list grid-metro3">
                        <div class="resizer"></div>

                        <!-- Start Single Demo  -->
                        <div class="maso-item marketplace career instructor">
                            <div class="single-demo">
                                <a class="single-demo-link" href="01-main-demo.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-1.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-1.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Main Demo <span class="label-new">Hot</span></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item marketplace career">
                            <div class="single-demo">
                                <a class="single-demo-link" href="12-marketplace.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-12.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-12.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Marketplace <span class="label-new">Hot</span></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item university">
                            <div class="single-demo">
                                <a class="single-demo-link" href="04-kindergarten.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-4.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-4.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Kindergarten <span class="label-new">Hot</span></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item university">
                            <div class="single-demo">
                                <a class="single-demo-link" href="13-university-classic.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-13.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-13.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">University Classic <span class="label-new">Hot</span></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item instructor career marketplace">
                            <div class="single-demo">
                                <a class="single-demo-link" href="14-home-elegant.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-14.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-14.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Home Elegant</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item career university instructor">
                            <div class="single-demo">
                                <a class="single-demo-link" href="09-gym-coaching.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-9.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-9.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">GYM Coaching</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item university marketplace career">
                            <div class="single-demo">
                                <a class="single-demo-link" href="03-online-school.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-3.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-3.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Online School</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item university">
                            <div class="single-demo">
                                <a class="single-demo-link" href="06-university-status.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-6.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-6.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">University Status</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item instructor career marketplace">
                            <div class="single-demo">
                                <a class="single-demo-link" href="15-home-technology.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-15.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-15.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Home Technology</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item instructor singlecourse">
                            <div class="single-demo">
                                <a class="single-demo-link" href="07-instructor-portfolio.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-7.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-7.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Instructor Portfolio</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item university marketplace career">
                            <div class="single-demo">
                                <a class="single-demo-link" href="08-language-academy.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-8.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-8.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Language Academy</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item singlecourse career instructor">
                            <div class="single-demo">
                                <a class="single-demo-link" href="11-single-course.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-11.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-11.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Single Course</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item marketplace">
                            <div class="single-demo">
                                <a class="single-demo-link" href="10-online-course.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-10.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-10.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Online Course</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item marketplace career">
                            <div class="single-demo">
                                <a class="single-demo-link" href="05-classic-lms.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-5.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-5.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Classic LMS</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item marketplace university">
                            <div class="single-demo">
                                <a class="single-demo-link" href="02-course-school.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-2.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-2.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Course School</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item marketplace university">
                            <div class="single-demo">
                                <a class="single-demo-link" href="16-udemy-affiliate.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-16.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-16.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Udemy Affiliate</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item marketplace university">
                            <div class="single-demo">
                                <a class="single-demo-link" href="17-online-academy.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-17.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-17.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Online Academy</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item instructor">
                            <div class="single-demo">
                                <a class="single-demo-link" href="18-instructors-coaches.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-18.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-18.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Instructors & Coaches</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item career university">
                            <div class="single-demo">
                                <a class="single-demo-link" href="19-modern-university.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-19.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-19.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Modern University</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item career university">
                            <div class="single-demo">
                                <a class="single-demo-link" href="20-multilingual.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-20.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-20.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Multilingual</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item marketplace career">
                            <div class="single-demo">
                                <a class="single-demo-link" href="21-art-design-school.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-21.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-21.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Art & Design School</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item instructor university">
                            <div class="single-demo">
                                <a class="single-demo-link" href="22-wishlist.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-22.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-22.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Wishlist</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item instructor career">
                            <div class="single-demo">
                                <a class="single-demo-link" href="23-coaching.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-23.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-23.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Coaching</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item instructor university">
                            <div class="single-demo">
                                <a class="single-demo-link" href="24-health-wellness-institute.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-24.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-24.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Health & Wellness Institute</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item university instructor">
                            <div class="single-demo">
                                <a class="single-demo-link" href="25-life-coach.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-25.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-25.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Life Coach</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->

                        <!-- Start Single Demo  -->
                        <div class="maso-item marketplace instructor">
                            <div class="single-demo">
                                <a class="single-demo-link" href="26-islamic-center.php">
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/demo-26.png" alt="Education Images">
                                        <div class="mobile-view">
                                            <div class="inner">
                                                <img src="assets/images/splash/demo-mobile-26.png" alt="Histudy Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Islamic Center</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Demo  -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home Demo Area  -->

    <!-- Start Plugin Presentation Area  -->
    <div class="rbt-pluginpresentation-area bg-color-white rbt-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">CORE FEATURES</span>
                        <h2 class="title">Histudy Exclusive Features</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--60 g-5">
                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/bootstrap.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Bootstrap5</h5>
                                <span class="rbt-badge">CSS Framework</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/font.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Google Font</h5>
                                <span class="rbt-badge">Exclusive Fonts</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/instagram.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Instagram</h5>
                                <span class="rbt-badge">Photo and Video</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/mainchimp.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Mainchimp</h5>
                                <span class="rbt-badge">Email Platform</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/validation.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">W3C Validation</h5>
                                <span class="rbt-badge">Markup Validity</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/isotop.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Isotop</h5>
                                <span class="rbt-badge">ImagesLoaded</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/slider.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Swiper Sldier</h5>
                                <span class="rbt-badge">Slider Plugin</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/contact.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Contact Form</h5>
                                <span class="rbt-badge">Dynamic Form</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/popup.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Magnify Popup</h5>
                                <span class="rbt-badge">Lightbox & Dialog</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/seo.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">SEO Friendly</h5>
                                <span class="rbt-badge">Search Engine</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/support.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Pro Support</h5>
                                <span class="rbt-badge">Pro Support</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

                <!-- Start Single Plugin  -->
                <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6 col-6 rbt-feature-column" data-sal-delay="150"
                    data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-feature-plugin">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/plugin/animation.png" alt="Plugin Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Animation</h5>
                                <span class="rbt-badge">Traditional Animation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Plugin  -->

            </div>
        </div>
    </div>
    <!-- End Plugin Presentation Area  -->

    <!-- Start Course Presentation Area  -->
    <div class="rbt-inner-page-layout-area bg-color-white rbt-section-gap rbt-shape-bg-area top-circle-shape-top">
        <div class="wrapper position-relative overflow-hidden">
            <div class="rbt-splite-style">
                <div class="split-wrapper">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-12 col-xl-5 col-12">
                            <div
                                class="swiper banner-splash-inner-layout-active rbt-arrow-between rbt-dot-bottom-center icon-bg-primary">
                                <div class="swiper-wrapper">

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-01.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout One</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-02.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout Two</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-03.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout Three</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-04.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout Four</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-05.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout Five</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-06.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout Six</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-07.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout Seven</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-08.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout Eight</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-09.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout Nine</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-10.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout Ten</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/course-layout-11.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Course Layout Eleven</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->


                                </div>
                                <div class="rbt-swiper-pagination"></div>
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
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-6 col-12">
                            <div class="split-inner">
                                <span class="rbt-badge-6 bg-primary-opacity">Course Showcase</span>
                                <h4 class="title">Manage your courses in an authentic way.</h4>
                                <p class="description">Create your website course layout by choosing from 12 layout
                                    options.</p>
                                <div class="layout-format-image mb--20">
                                    <img src="assets/images/splash/icons/course-format.png" alt="post Images">
                                </div>

                                <h5 class="subtitle mb--20">Courses Feature List:</h5>
                                <div class="plan-offer-list-wrapper">
                                    <ul class="plan-offer-list rbt-list-primary-opacity">
                                        <li><i class="feather-check"></i> LMS Admin UI/UX</li>
                                        <li><i class="feather-check"></i> Lesson Types</li>
                                        <li><i class="feather-check"></i> User Profile</li>
                                        <li><i class="feather-check"></i> Teacher Profile</li>
                                        <li><i class="feather-check"></i> Student Profile</li>
                                        <li><i class="feather-check"></i> Course With Tab</li>
                                    </ul>
                                    <ul class="plan-offer-list rbt-list-primary-opacity">
                                        <li><i class="feather-check"></i> Lesson Pages</li>
                                        <li><i class="feather-check"></i> Single Page Variation</li>
                                        <li><i class="feather-check"></i> Quick Action</li>
                                        <li><i class="feather-check"></i> Filter the Courses</li>
                                        <li><i class="feather-check"></i> Course Wishlist</li>
                                        <li><i class="feather-check"></i> Course Ratings</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-circle-shape"></div>
        </div>
        <div class="rbt-shape-bg">
            <img src="assets/images/splash/bg/left-right-line-small.svg" alt="Shape Images">
        </div>
    </div>
    <!-- End Course Presentation Area  -->

    <!-- Start Event Presentation Area  -->
    <div
        class="rbt-inner-page-layout-area bg-color-extra2 rbt-section-gap splash-right-align-image top-circle-shape-top top-circle-shape-top-left">
        <div class="wrapper position-relative overflow-hidden">
            <div class="rbt-splite-style">
                <div class="split-wrapper">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-12 col-xl-6 col-12 order-2 order-xl-1">
                            <div class="split-inner">
                                <span class="rbt-badge-6 bg-primary-opacity">Event Options</span>
                                <h4 class="title">Empower your event management skill with HiStudy</h4>
                                <p class="description">Create event layouts, floor plans, event plans, and more with
                                    histudy. Get event layout templates, and more by our histudy template. You don't
                                    need to be a designer to create professional-looking results.
                                    Histudy event layout is perfect for event managemnt.</p>

                                <h5 class="subtitle mb--20">Event Feature List:</h5>

                                <div class="plan-offer-list-wrapper">
                                    <ul class="plan-offer-list rbt-list-primary-opacity">
                                        <li><i class="feather-check"></i> EMultiple Views</li>
                                        <li><i class="feather-check"></i> Easy Events Classification</li>
                                        <li><i class="feather-check"></i> Event Widgets</li>
                                        <li><i class="feather-check"></i> Organizers & Venues</li>
                                        <li><i class="feather-check"></i> Contact Organizer </li>
                                    </ul>
                                    <ul class="plan-offer-list rbt-list-primary-opacity">
                                        <li><i class="feather-check"></i> Google Maps</li>
                                        <li><i class="feather-check"></i> Guest List</li>
                                        <li><i class="feather-check"></i> Sell Tickets</li>
                                        <li><i class="feather-check"></i> Attendee Information</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-5 col-12 offset-xl-1 order-1 order-xl-2">
                            <div
                                class="swiper banner-splash-inner-layout-active rbt-arrow-between rbt-dot-bottom-center icon-bg-primary">
                                <div class="swiper-wrapper">

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/event-layout-01.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Event Layout One</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/event-layout-02.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Event Layout Two</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/event-layout-03.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Event Layout Three</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/event-layout-04.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Event Layout Four</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                </div>
                                <div class="rbt-swiper-pagination"></div>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
            </div>
        </div>
    </div>
    <!-- End Event Presentation Area  -->

    <!-- Start Shop Presentation Area  -->
    <div class="rbt-inner-page-layout-area bg-color-white rbt-section-gap rbt-shape-bg-area top-circle-shape-top">
        <div class="wrapper position-relative overflow-hidden">
            <div class="rbt-splite-style">
                <div class="split-wrapper">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-12 col-xl-5 col-12">
                            <div
                                class="swiper banner-splash-inner-layout-active rbt-arrow-between rbt-dot-bottom-center icon-bg-primary">
                                <div class="swiper-wrapper">

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/shop-layout-01.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Shop Layout One</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/shop-layout-02.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Shop Layout Two</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/shop-layout-03.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Shop Layout Three</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/shop-layout-04.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Shop Layout Four</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/shop-layout-05.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Shop Layout Five</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/shop-layout-05.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Shop Layout Five</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                </div>
                                <div class="rbt-swiper-pagination"></div>
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
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-6 col-12">
                            <div class="split-inner">
                                <span class="rbt-badge-6 bg-primary-opacity">World-Class Design</span>
                                <h4 class="title">Create a Stunning Store in Minutes with HiStudy!</h4>
                                <p class="description">Create a beautiful online Book store (Sale Anything) using
                                    powerful histudy template and start selling right away!</p>

                                <h5 class="subtitle mb--20">Top Notech Shop Feature:</h5>

                                <div class="plan-offer-list-wrapper">
                                    <ul class="plan-offer-list rbt-list-primary-opacity">
                                        <li><i class="feather-check"></i> Pixel-Perfect Interface</li>
                                        <li><i class="feather-check"></i> Perfect Product Layouts</li>
                                        <li><i class="feather-check"></i> Single Product Variation</li>
                                        <li><i class="feather-check"></i> Offcanvas for Mini Cart</li>
                                        <li><i class="feather-check"></i> One Page Checkout</li>
                                        <li><i class="feather-check"></i> Wishlist Page</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-circle-shape"></div>
        </div>
        <div class="rbt-shape-bg">
            <img src="assets/images/splash/bg/left-right-line-small.svg" alt="Shape Images">
        </div>
    </div>
    <!-- End Shop Presentation Area  -->

    <!-- Start Blog Presentation Area  -->
    <div
        class="rbt-inner-page-layout-area bg-color-extra2 rbt-section-gap top-circle-shape-top top-circle-shape-top-left">
        <div class="wrapper position-relative overflow-hidden">
            <div class="rbt-splite-style">
                <div class="split-wrapper">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-12 col-xl-6 col-12 order-2 order-xl-1">
                            <div class="split-inner">
                                <span class="rbt-badge-6 bg-primary-opacity">Pixel-Perfect Blog Design</span>
                                <h4 class="title">Create a Super Clean Blog in Seconds!</h4>
                                <p class="description">Have a nice blog layout for presentation your articles. You can
                                    choose from over available blog templates in histudy education template.</p>

                                <div class="layout-format-image mb--20">
                                    <img src="assets/images/splash/icons/post-format.png" alt="post Images">
                                </div>

                                <h5 class="subtitle mb--20">Blog Feature List:</h5>

                                <div class="plan-offer-list-wrapper">
                                    <ul class="plan-offer-list rbt-list-primary-opacity">
                                        <li><i class="feather-check"></i> Blog List</li>
                                        <li><i class="feather-check"></i> Blog Grid</li>
                                        <li><i class="feather-check"></i> Blog Grid Minimal</li>
                                        <li><i class="feather-check"></i> Blog With Sidebar</li>
                                        <li><i class="feather-check"></i> Blog Details</li>
                                        <li><i class="feather-check"></i> Post Format Standard</li>
                                        <li><i class="feather-check"></i> Post Format Gallery</li>
                                    </ul>
                                    <ul class="plan-offer-list rbt-list-primary-opacity">
                                        <li><i class="feather-check"></i> Post Format Quote</li>
                                        <li><i class="feather-check"></i> Post Format Audio</li>
                                        <li><i class="feather-check"></i> Post Format Video</li>
                                        <li><i class="feather-check"></i> Media Under Title <span
                                                class="rbt-badge-card">Coming</span></li>
                                        <li><i class="feather-check"></i> Sticky Sidebar <span
                                                class="rbt-badge-card">Coming</span></li>
                                        <li><i class="feather-check"></i> Auto Masonry <span
                                                class="rbt-badge-card">Coming</span></li>
                                        <li><i class="feather-check"></i> Meta Overlaid <span
                                                class="rbt-badge-card">Coming</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-5 col-12 offset-xl-1 order-1 order-xl-2">
                            <div
                                class="swiper banner-splash-inner-layout-active rbt-arrow-between rbt-dot-bottom-center icon-bg-primary">
                                <div class="swiper-wrapper">

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/blog-layout-01.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Blog List</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/blog-layout-02.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Blog Grid</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/blog-layout-03.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Blog Minimal</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/blog-layout-04.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Blog With Sidebar</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/blog-layout-05.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Blog Details</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/blog-layout-06.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Post Formate Standard</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/blog-layout-07.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Post Formate Quote</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/blog-layout-08.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Post Formate Audio</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                    <!-- Start Single Slider  -->
                                    <div class="swiper-slide">
                                        <div class="single-slide">
                                            <div class="rbt-splash-inner-layout-inner">
                                                <div class="thumbnail image-left-content">
                                                    <img src="assets/images/splash/innerlayout/blog-layout-09.png"
                                                        alt="split Images">
                                                </div>
                                                <div class="content text-center">
                                                    <h4 class="title">Post Formate Video</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Slider  -->

                                </div>

                                <div class="rbt-swiper-pagination"></div>

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

                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
            </div>
        </div>
    </div>
    <!-- End Blog Presentation Area  -->

    <!-- Start Campain Area  -->
    <div class="rbt-buy-now-area bg-gradient-8 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rbt-buy-now-content text-center">
                        <h2 class="title color-white">Globally trusted by hundreds of thousands of customers.</h2>
                        <h4 class="subtitle color-white">Work Smarter ☕ Create Better ⭐ Build Faster ⚡</h4>

                        <a class="rbt-btn btn-white radius hover-icon-reverse btn-xl" href="#">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Buy HiStudy Now</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </a>

                        <span class="label-text color-white d-block text-uppercase">How will Histudy benefit me?</span>
                    </div>

                    <div class="rbt-bebefit-list">
                        <div class="single-bebefit">
                            <div class="icon">
                                <img src="assets/images/splash/icons/benefit-01.png" alt="Splash Images">
                            </div>
                            <h6 class="title">Free Lifetime <br> Update</h6>
                        </div>
                        <div class="single-bebefit">
                            <div class="icon">
                                <img src="assets/images/splash/icons/benefit-02.png" alt="Splash Images">
                            </div>
                            <h6 class="title">Premium Support <br> 6 Month Free</h6>
                        </div>
                        <div class="single-bebefit">
                            <div class="icon">
                                <img src="assets/images/splash/icons/benefit-03.png" alt="Splash Images">
                            </div>
                            <h6 class="title">High Speed <br> Performance</h6>
                        </div>
                        <div class="single-bebefit">
                            <div class="icon">
                                <img src="assets/images/splash/icons/benefit-04.png" alt="Splash Images">
                            </div>
                            <h6 class="title">We Provided Premium <br> Plugins (Enjoy)</h6>
                        </div>
                        <div class="single-bebefit">
                            <div class="icon">
                                <img src="assets/images/splash/icons/benefit-05.png" alt="Splash Images">
                            </div>
                            <h6 class="title">Developer Friendly <br> Code & Design</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="map-image">
            <img src="assets/images/splash/icons/map.png" alt="Map Image">
        </div>
    </div>
    <!-- End Campain Area  -->

    <!-- Start Feature List Area  -->
    <div class="rbt-splash-fetaure-list-area bg-color-white rbt-section-gap top-circle-shape-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">TOP-NOTCH FEATURES</span>
                        <h2 class="title"><span class="theme-gradient">Everything</span> you need to succeed.</h2>
                        <p class="description has-medium-font-size mt--20">Histudy comes with interactive design tools
                            and features that could leave you feeling like a pro after just a few clicks.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30">

                <!-- Start Feature Box  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-splash-feature-box bg-gradient-3 color-white">
                        <div class="inner">
                            <div class="content">
                                <p class="description"><strong>Complete Education Package.</strong> <br>
                                    A complete education package for build any type of education website.</p>
                            </div>
                            <div class="thumbnail text-end">
                                <img src="assets/images/splash/feature/feature-03.png" alt="Education Fetaure">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Feature Box  -->

                <!-- Start Feature Box  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="170" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-splash-feature-box bg-gradient-11">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/feature/feature-08.png" alt="Education Fetaure">
                            </div>
                            <div class="content">
                                <p class="description"><strong>Amazing Courses</strong>
                                    Have a lots of course layout options for creating a online education website.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Feature Box  -->


                <!-- Start Feature Box  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="180" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-splash-feature-box">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/feature/feature-04.png" alt="Education Fetaure">
                            </div>
                            <div class="content">
                                <p class="description"><strong>Sass Available.</strong> The tamplate has Sass available
                                    for css. You can Change
                                    css by sass.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Feature Box  -->

                <!-- Start Feature Box  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-splash-feature-box bg-color-black color-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/feature/feature-01.jpg" alt="Education Fetaure">
                            </div>
                            <div class="content">
                                <p class="description"><strong>Perfect Responsive.</strong> Our Template is full Perfect
                                    for all device. You can visit our template all device easily.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Feature Box  -->

                <!-- Start Feature Box  -->
                <div class="col-lg-8 col-md-6 col-sm-6 col-12" data-sal-delay="220" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-splash-feature-box space-between-align">
                        <div class="inner">
                            <div class="content">
                                <h3 class="theme-gradient">Fast Loading Speed.</h3>
                                <p class="description">Histudy is faster loading speed. Histudy create your template so
                                    much faster.</p>
                            </div>
                            <div class="thumbnail">
                                <img src="assets/images/splash/feature/feature-06.png" alt="Education Fetaure">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Feature Box  -->

                <!-- Start Feature Box  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="240" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-splash-feature-box bg-color-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/feature/feature-05.png" alt="Education Fetaure">
                            </div>
                            <div class="content">
                                <p class="description"><strong>Bootstrap5 Comfortable.</strong> Bootstrap5 comfortable
                                    is available in Histudy. So layout
                                    changes is so much easily.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Feature Box  -->

                <!-- Start Feature Box  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="260" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-splash-feature-box bg-gradient-14 color-white">
                        <div class="inner">
                            <div class="content">
                                <p class="description"><strong>Freedom to Create The LMS Platform You Want</strong> By
                                    following Histudy layout you can create a LMS Platform as you like.</p>
                            </div>
                            <div class="thumbnail">
                                <img src="assets/images/splash/feature/feature-09.png" alt="Education Fetaure">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Feature Box  -->

                <!-- Start Feature Box  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="280" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-splash-feature-box color-white card-bg-6">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/splash/feature/feature-07.png" alt="Education Fetaure">
                            </div>
                            <div class="content">
                                <p class="description"><strong>Well Documentation.</strong> Have a Well organized
                                    documentation and up to date is histudy.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Feature Box  -->

            </div>
        </div>
    </div>
    <!-- End Feature List Area  -->

    <!-- Start Testimonial Area  -->
    <div class="rbt-splash-testimonial-area bg-color-white overflow-hidden position-relative">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">A FEW WORDS FROM OUR CLIENTS</span>
                            <h2 class="title">What People Are <br> Saying About
                                <span class="header-caption">
                                    <span class="cd-headline zoom">
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible theme-gradient">Pixcels Themes.</b>
                                            <b class="is-hidden theme-gradient">HiStudy Template.</b>
                                        </span>
                                    </span>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="splash-testimonial-all-wrapper pb--60">

            <div class="scroll-animation-wrapper no-overlay mt--50">
                <div class="scroll-animation scroll-right-left">

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3"><strong>Beautiful theme!</strong> (Of course, that’s why I got
                                        it). But most
                                        importantly, thank you for the quick responses from your customer support. I was
                                        finding it hard to install and customise the demo but he guided</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">teechelle</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3"><strong>The design Quality is perfect!</strong> Customer
                                        Support is the best so
                                        far. Thank you!</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">3anbo3d</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">The theme itself suits my needs, but the support is the
                                        superstar
                                        that earns this theme and the team behind <strong>it a 5 stars rating</strong>.
                                        Kudos!</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">arikurnia1</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">I needed support on a issue to install the theme demo, the CS
                                        team is super efficient, they <strong>fixed the issue in few hours.</strong>
                                        Thank you!</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">stephanieprugne</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3"><strong>Awesome Customer support.</strong> Fixed issues in
                                        less than 24 Hours. Very professional and prompt.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">taggrwal</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">These guys are the REAL deal. Fantastic website and even
                                        <strong>better customer support</strong>. Highly recommend and will work with
                                        them again.
                                    </p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">phil148</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">The theme itself suits my needs, but the support is the
                                        superstar that earns this theme and the team behind it a <strong>5 stars
                                            rating</strong>. Kudos!</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">arikurnia1</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">I can only <strong>recommend the theme!</strong> Very nice
                                        design, good adjustment options.The support is very friendly and incredibly
                                        helpful. Thanks!</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">timofk</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">The theme is awesome,and the support it's just fantastic,
                                        solved my problems in few hours.5 stars are not enough</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">alesmp82</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                </div>
            </div>

            <div class="scroll-animation-wrapper no-overlay mt--30">
                <div class="scroll-animation scroll-left-right">

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">They assist me very well and did everything I asked !
                                        Quick answer to <strong>So yes I recommand :)</strong></p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">saverysyoann</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">I have zero experience with web design and found this template
                                        super easy to use. Very helpful support team too.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">thomasmcbrien00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">they was so kindly and replay so fast and they fixed all what
                                        i want, thank you so much !</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">ordersgate</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3"><strong>Responsive and competent support.</strong> They
                                        perfectly answer the questions of use and the various problems that one can
                                        have. A big thank-you !</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">couletcorentin</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">They are really amazing, the customization is really dope, and
                                        Support is really awesome</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">rohithaditya</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">One of the best support and clean code on codecanyon!
                                        <strong>Highly recommended!</strong>
                                    </p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">neosofts</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">I have never seen support as fast and efficient as this one.
                                        I can't say anything about the theme yet since I just started building the site,
                                        but with this kind of support, <strong>I am confident it will be
                                            awesome</strong>.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">desdizajn</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">The customer support for this theme is top notch. They have
                                        been on the ball answering my questions, especially when it came to fixing bugs
                                        I was experiencing.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">nyyankster71</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Very Beautiful theme and great support team and fast response
                                        from author team.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">pranavkumbhare</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                </div>
            </div>

            <div class="scroll-animation-wrapper no-overlay mt--50">
                <div class="scroll-animation scroll-right-left">

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Beautiful theme! (Of course, that’s why I got it). But most
                                        importantly, thank you for the quick responses from your customer support. I was
                                        finding it hard to install and customise the demo but he guided</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">teechelle</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">The design Quality is perfect! Customer Support is the best so
                                        far.
                                        Thank you!</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">3anbo3d</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">The theme itself suits my needs, but the support is the
                                        superstar
                                        that earns this theme and the team behind it a 5 stars rating. Kudos!</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">arikurnia1</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">A really great theme and a great design at a low price.
                                        <strong>All in all Excellent</strong>. Best. Best wishes for Pixcels team.
                                    </p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">gorillacomputer1</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3"><strong>Great support,</strong> we have an issue with the
                                        theme and they solve it in the same day!! Thanks so much!!</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">granviamarketing</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">This theme is beautiful, well crafted elements and the support
                                        is top notch! This team deserve everything! <strong>I recommend this
                                            100%.</strong></p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">dasantos97</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">The theme is <strong>great and the support is even
                                            better</strong>. They helped my with installation and everything.
                                        Thank you!</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">hudecvfx</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">It is a very minimal beautiful theme. I really like these
                                        types of themes. <strong>They are also very good at support</strong>. They
                                        answered almost all my questions :)</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">mrtyildiz</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="assets/images/splash/icons/rating.png" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Just downloaded the theme. never used it yet but I'm sure that
                                        it's amazing because the HTML version was mind blowing so the WordPress is
                                        <strong>gonna be mind-blowing too :)</strong>
                                    </p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/splash/icons/envato.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">ranawebdesign</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                </div>
            </div>
            <div class="read-more-review">
                <div class="section-title text-center mb--30">
                    <h5 class="title color-white">Our Fantastic <br> Envato Customers Reviews</h5>
                </div>
                <a class="rbt-btn btn-gradient hover-icon-reverse  btn-xxl" href="#">
                    <span class="icon-reverse-wrapper">
                        <span class="btn-text"> ⭐ Read More Review</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </span>
                </a>
                <div class="section-title text-center mt--20">
                    <h5 class="title rbt-title-style-2 color-white">4.85 average <br> based on <strong
                            class="color-white">300+</strong> ratings.</h5>
                </div>
            </div>
        </div>

        <div class="line-shape text-center">
            <img src="assets/images/splash/icons/line-shape.png" alt="Shape">
        </div>
    </div>
    <!-- End Testimonial Area  -->

    <!-- Start Accordion Area  -->
    <div
        class="rbt-accordion-area accordion-style-1 rbt-accordion-color-white bg-color-darker rbt-section-gapBottom pt--60 pt_sm--0 overflow-hidden position-relative top-circle-shape-top overlpping-call-to-action">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-sm-12">

                    <div class="section-title text-center pb--60">
                        <div class="client-group-image">
                            <img src="assets/images/splash/icons/group-image.png" alt="group image" class="mb--30">
                        </div>
                        <span class="subtitle bg-secondary-opacity">Check out our FAQ section to see if we can
                            help.</span>
                        <h2 class="title mb_sm--0 text-center color-white-off">Do you have any Question</h2>
                    </div>
                    <div class="rbt-accordion-style rbt-accordion-02 accordion">
                        <div class="accordion" id="accordionExamplea1">
                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Histudy? How does it work?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExamplea1">
                                    <div class="accordion-body card-body">
                                        Education HTML Template – Histudy is made for Education Website, Course School,
                                        Courses Hub, College, Academy, University, School, Kindergarten, Online School,
                                        Classic Lms, University Status, Instructor Portfolio, Language Academy, Gym
                                        Coaching, Online Course, Single Course, Marketplace, University Classic, Home
                                        Elegant, Home Technology etc.
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
                                        After purchasing the product need you any support you can share with us with
                                        create support ticket here: <a target="_blank"
                                            href="https://www.pixcelsthemes.com/">Support Center</a> Our
                                        support team will contact with you soon
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
                                        Yes, We will get update the Histudy. And you can get it any time. Next time we
                                        will comes with more feature. You can be get update for unlimited times. Our
                                        dedicated team works for update.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Can I change any Elements as I like?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExamplea1">
                                    <div class="accordion-body card-body">
                                        Yes, You can change any Elements as you like. And By the way you can
                                        build your website which you are choose.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Can I build a complete project with this template?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExamplea1">
                                    <div class="accordion-body card-body">
                                        Yes, Why not. You can build a project and complete website as you are like.More
                                        component are available include in this templete. And you can be use it
                                        following documentation.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Do you have an online documentation?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExamplea1">
                                    <div class="accordion-body card-body">
                                        Yes, please go to our online documentation via <a href="#">click here</a>.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        How can I remove unwanted plugins?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExamplea1">
                                    <div class="accordion-body card-body">
                                        <p>All third-party plugin JS files are located in <code
                                                class="folder">src/assets/js/vendor</code> and their CSS files are in
                                            <code class="folder">src/assets/css/vendor</code>. Just remove unwanted
                                            vendor JS / CSS files from vendor folders and then remove unwanted functions
                                            from <code class="file">src/assets/js/main.js</code>.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        How can I remove unwanted CSS?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#accordionExamplea1">
                                    <div class="accordion-body card-body">
                                        <p>Bootstrap SCSS imports are located in <code
                                                class="file">src/assets/css/vendor/bootstrap.min.css</code> and template
                                            SCSS imports are in <code class="file">src/assets/scss/style.scss</code>.
                                            Remove or comment any unwanted import and recompile.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Accordion Area  -->

    <div class="bg-gradient-6">
        <div class="rbt-splash-callto-action">
            <div class="wrapper plr--120 plr_lg--30 plr_md--30 plr_sm--30 plr_mobile--30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner text-start">
                            <a href="#"
                                class="rbt-badge-2 mb--20 border-0 shadow-none bg-color-white-opacity color-white bounce-slide">
                                <div class="image"><img src="assets/images/splash/icons/envato.png"
                                        alt="Purchased Now Images"></div> Purchased Now &nbsp; &#62; &nbsp; <i> Mandy F.
                                    Wood</i>
                            </a>
                            <h2 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Take your
                                website to the next level!</h2>
                            <div class="footer-btn mt--25" data-sal-delay="200" data-sal="slide-up"
                                data-sal-duration="800">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Purchase Now</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                            <span class="subtitle" data-sal-delay="250" data-sal="slide-up"
                                data-sal-duration="800"><strong>One-time</strong> purchase. No additional fees or
                                subscriptions.</span>
                            <div class="line-shape">
                                <img src="assets/images/icons/line-shape.png" alt="Line Shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Support Area  -->
        <div class="rbt-support-area rbt-section-gap">
            <div class="container">
                <div class="row g-5">
                    <!-- Start Splash Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="rbt-splash-service no-translate h-100">
                            <div class="inner">
                                <div class="icon">
                                    <img src="assets/images/icons/documentation.png" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Online Documentation</a></h4>
                                    <p class="description">Well organized and up to date</p>
                                    <a class="rbt-btn bg-primary-opacity hover-icon-reverse w-100" target="_blank"
                                        href="https://histudy.pixcelsthemes.com/docs/php/index.html">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">View Documentation</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                    <div class="rbt-button-group justify-content-start mt--20">
                                        <a class="rbt-btn-link"
                                            href="https://histudy.pixcelsthemes.com/docs/php/index.html">Changelog<i
                                                class="feather-arrow-right"></i></a>
                                    </div>
                                    <div class="rbt-button-group justify-content-start">
                                        <a class="rbt-btn-link" href="#">Download<i
                                                class="feather-arrow-right"></i></a>
                                    </div>
                                    <div class="rbt-button-group justify-content-start">
                                        <a class="rbt-btn-link"
                                            href="#">Video Tutorial<i
                                                class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Splash Service  -->

                    <!-- Start Splash Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="200" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="rbt-splash-service no-translate support h-100">
                            <div class="inner">
                                <div class="icon">
                                    <img src="assets/images/icons/support.png" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Dedicated Support</a></h4>
                                    <p class="description">Need support ? Submit a ticket. We will be happy to
                                        assist you.</p>
                                    <a class="rbt-btn bg-secondary-opacity hover-icon-reverse w-100" target="_blank"
                                        href="https://www.pixcelsthemes.com/">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Get Support</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                    <ul class="liststyle">
                                        <li><span>Support Time:</span> Sunday – Thursday</li>
                                        <li><span>Response Time:</span> Maximum 24 hours</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Splash Service  -->

                    <!-- Start Splash Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up"
                        data-sal-duration="800">
                        <div
                            class="rbt-splash-service no-translate support h-100 bg-gradient-7 rbt-splash-service-white border-0">
                            <div class="inner">
                                <div class="icon">
                                    <img src="assets/images/icons/hire.png" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h4 class="title color-white">Hire Developer & Designer</h4>
                                    <!-- <p class="description color-white">Need you any custom job</p> -->
                                    <p class="description color-white opacity-75">Just give us the details about the
                                        project our developer & designer will get it done faster, Better, and could
                                        possibly imagine.</p>
                                    <a class="rbt-btn btn-white hover-icon-reverse w-100" target="_blank"
                                        href="https://www.pixcelsthemes.com/">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Hire Experts</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                    <ul class="plan-offer-list rbt-list-white-opacity mt--20">
                                        <li>
                                            <i class="feather-check"></i>Response Time: 2 Hours
                                        </li>
                                        <li>
                                            <i class="feather-check"></i> 14-day money back guarantee
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Splash Service  -->
                </div>
            </div>
        </div>
        <!-- End Support Area  -->
    </div>

    <!-- @@include('separator.php') -->

    <div class="copyright-area copyright-style-1 ptb--20 bg-color-darker">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <p class="rbt-link-hover text-center color-white-off">Histudy by <a href="https://www.pixcelsthemes.com"
                            class="color-white">Pixcels Themes.</a> © All
                        rights reserved</p>
                </div>
            </div>
        </div>
    </div>


    @@include('scripts.php')
</body>

</html>