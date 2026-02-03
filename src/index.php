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
                    <img src="/assets/images/about/sun-01.svg" alt="Sun images"><span title="Light Mode"> Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <img src="/assets/images/about/vector.svg" alt="Vector Images"><span title="Dark Mode"> Dark</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Start top Area  -->
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
    <!-- End top Area  -->


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
                                    <img src="./assets/images/brand/Thinq-Nxt-logo-png-scaled.png" alt="Education Logo Images">
                                </a>
                            </div>
                            <div class="logo d-none logo-light">
                                <a href="index.php">
                                    <img src="./assets/images/brand/Thinq-Nxt-logo-png-scaled.png" alt="Education Logo Images">
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
    <div class="rbt-splash-slider d-flex align-items-center ">

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
                                <div class="highlight-item hero-hightlight-item">
                                    <span class="dot"></span>
                                    <div class="text">
                                        <h4><span class="red">100%</span> Online / Offline</h4>
                                        <p>Live Classes</p>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="highlight-item hero-hightlight-item">
                                    <div class="text">
                                        <h4><span class="red">6 - 8</span> Months</h4>
                                        <p>Course duration</p>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="highlight-item hero-hightlight-item">
                                    <div class="text">
                                        <h4><span class="red">100%</span> Job Assurance</h4>
                                        <p>Placement Services</p>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="highlight-item hero-hightlight-item">
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
                            
                            <!-- <div class="banner-group-shape">
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
                            </div> -->
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
        @@include('trustproof.php');
    <!-- Start trust signals -->
      
    <!-- End trust signals -->

    <!-- Start courses  -->

    <div class="col-lg-12 padding_bottom_100px rbt-splash-courses bg-color-white container">
                    <div class="section-head text-center" style="padding-bottom: 30px !important;">
                            <!-- <span class="subtitle bg-secondary-opacity">All in One Course</span> -->
                            <h2 class="title section-headings">Full Stack <span>Data Science</span></h2>
                        </div>

                    <div class="row">
                        <div class="splash-service-main position-relative">
                            <div class="service-wrapper service-white">
                                <div class="row g-0 five-cols justify-content-left">

                                    <div class="col-lg-6 col-xl-4 col-md-6 col-sm-6 col-12 service__style--column">
                                        <div class="service service__style--1">
                                            <div class="icon ">
                                                <img src="assets/images/icons/icons-01.png" alt="Icon Images">
                                                <h4 class="title">DATA SCIENCE</h4>
                                            </div>
                                            <div class="content">
                                                
                                                <p>Statistics, Python & SQL, Practical data problem solving, Learn from industry professionals, Designed for career switchers.</p>
                                            </div>

                                              <!-- Arrow button -->
                                               <div class="crs-btm">
                                                <a href="">View Curriculum</a>
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
                                               <div class="crs-btm">
                                                <a href="">View Curriculum</a>
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

                                    <div class="col-lg-6 col-xl-4 col-md-6 col-sm-6 col-12 service__style--column">
                                        <div class="service service__style--1">
                                            <div class="course-popular">
                                            <span class="">Most popular</span>

                                            </div>
                                            <div class="icon">
                                                <img src="assets/images/icons/icons-03.png" alt="Icon Images">
                                                <h4 class="title">DATA ANALYST</h4>
                                            </div>
                                            <div class="content">
                                                
                                                <p>Excel, SQL & BI tools, Data-driven decision making, Real business scenarios, Analyst-focused preparation.</p>
                                            </div>
                                            <!-- Arrow button -->
                                               <div class="crs-btm">
                                                <a href="">View Curriculum</a>
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
                                               <div class="crs-btm">
                                                <a href="">View Curriculum</a>
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
                                               <div class="crs-btm">
                                                <a href="">View Curriculum</a>
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
                </div>
 <!-- end courses  -->
    
    
      <!-- Start why choose thinqnxt Area  -->
    
       <div class="rbt-splash-coding-quality-area padding_bottom_100px bg-color-white">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-head text-center" style="padding-bottom: 30px !important;">
                            <!-- <span class="subtitle bg-secondary-opacity">All in One Course</span> -->
                            <h2 class="title section-headings">Why Choose <span>ThinqNxt</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row  mt--15">
                    <!-- Start Top Feature  -->
                    @@include('whychoose.php')
                    <!-- <div class="col-lg-3 col-md-8 col-12" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="top-features-box h-100 text-center">
                            <div class="inner">
                                <span class="pre-title text-uppercase">Curriculum</span>

                                <div class="content__service">
                                    <h5 class="title">Real-world learning Real impact.</h5>
                                    <div class="thumbnail">
                                      
                                    <img src="assets/images/splash/feature/books-stack-of-three.png" alt="Image">

                                    </div>
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

                    <div class="col-lg-3 col-md-8 col-12" data-sal-delay="200" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="top-features-box h-100 text-center ">
                            <div class="inner">
                                    <span class="pre-title text-uppercase">Project</span>

                                <div class="content__service">
                                    <h5 class="title">Learning by doing—from day one.</h5>
                                    <div class="thumbnail">
                                 
                                        <img src="assets/images/splash/feature/task-management.png" alt="Image">

                                </div>
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
           
                    <div class="col-lg-3 col-md-8 col-12" data-sal-delay="250" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="top-features-box h-100 text-center">
                            <div class="inner">
                                    <span class="pre-title text-uppercase">Mentors </span>

                                <div class="content__service">
                                    <h5 class="title">Learn from Experienced professionals.</h5>
                                    <div class="thumbnail">
                                    <img src="assets/images/splash/feature/education.png" alt="Image">
                                </div>
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
                                    <span class="pre-title text-uppercase">Career</span>
                                    

                                <div class="content__service">
                                    <h5 class="title">Support focused on outcomes.</h5>
                                    <div class="thumbnail">
                                        <img src="assets/images/splash/feature/career-path.png" alt="Image">
                                     </div>
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
                    </div> -->
                    <!-- End Top Feature  -->
                </div>
            </div>
        </div>
    </div>
    <!-- End why choose thinqnxt Area  -->

      <!-- Carriculum start -->

      <div class="container padding_bottom_100px">
    <div class="wrapper">

        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <!-- @@include('curriculam.html'); -->

      <div class="col-lg-12 cur-con-sec ">
            <div class="cur-con-sticky">
                <div class="section-head cur-con-title" style="padding-bottom: 30px !important;">
                    <h2 class="section-headings">
                        Learning Track & <span>Curriculum</span>
                    </h2>
                </div>
                <div class="cur-con-body">

            <div class="py-pyramid col-lg-4">
                
                <div class="py-level py-l1 py-right py-active"
                    data-level="1"
                    data-label="01"
                    data-title="Engineering Essentials"></div>

                <div class="py-level py-l2 py-left"
                    data-level="2"
                    data-label="02"
                    data-title="Platform & Pipelines"></div>

                <div class="py-level py-l3 py-right"
                    data-level="3"
                    data-label="03"
                    data-title="Tools & Frameworks"></div>

                <div class="py-level py-l4 py-left"
                    data-level="4"
                    data-label="04"
                    data-title="Capstone Projects"></div>
            </div>
         
            
                <div class="skills-scroll-wrapper col-lg-8" id="pyScrollPanel">

                       
                        <section class="skills-panel  skill-track-section is-active " data-level="1">
                         
                            
                                <div class="cur-heading">
                                <h4>01: Data Engineering Essentials</h4>
                                <p>
                                Kick off your journey by mastering core principles, programming skills,
                                and career-readiness strategies in Data Engineering.
                                </p>
                            </div>

                            <div class="curriculum-grid">

                                <ul class="curriculum-list">
                                <li><i data-lucide="layers"></i> Introduction to Data Engineering</li>
                                <li><i data-lucide="cpu"></i> Computer Science Fundamentals</li>
                                <li><i data-lucide="code"></i> Python Programming Essentials</li>
                                <li><i data-lucide="terminal"></i> Advanced Python for Data Engineers</li>
                                <li><i data-lucide="filter"></i> Data Preparation & Cleaning for ML</li>
                                </ul>

                                <ul class="curriculum-list">
                                <li><i data-lucide="box"></i> Docker & Containerization Basics</li>
                                <li><i data-lucide="briefcase"></i> Crafting a Winning Job Application</li>
                                <li><i data-lucide="database"></i> SQL Mastery for Data Engineering</li>
                                <li><i data-lucide="trending-up"></i> Continuous Growth as a Data Engineer</li>
                                <li><i data-lucide="sparkles"></i> Foundations of Generative AI</li>
                                </ul>

                            </div>
                         
                            
                           
                        </section>

                        
                        <section class="skills-panel  skill-track-section" data-level="2">
                        
                                <div class="cur-heading">
                                <h4>02: Platform & Pipeline Architecture</h4>
                                <p>
                                Build resilient, end-to-end data platforms—secure by design—and learn
                                how to model, store, and serve data at scale.
                                </p>
                            </div>

                            <div class="architecture-grid">

                               
                                <div class="architecture-card">
                                <div class="card-header">
                                    <span class="card-icon">🧱</span>
                                    <h5>Data Platforms & Pipelines</h5>
                                </div>

                                <ul class="architecture-list">
                                    <li>Designing Data Platforms & Pipelines</li>
                                    <li>Platform Security: Best Practices & Governance</li>
                                    <li>Selecting the Right Data Stores</li>
                                </ul>
                                </div>

                                <div class="architecture-card">
                                <div class="card-header">
                                    <span class="card-icon">📐</span>
                                    <h5>Data Modeling Foundations</h5>
                                </div>

                                <ul class="architecture-list">
                                    <li>Introduction to Data Modeling</li>
                                    <li>Relational Data Modeling Techniques</li>
                                    <li>Dimensional Modeling for Analytics</li>
                                </ul>
                            

                            </div>

                                </div>
                            </section>
                          


           
                        <section class="skills-panel skill-track-section" data-level="3">

  <div class="cur-heading">
    <h4>03: Core Tools & Frameworks</h4>
    <p>
      Get hands-on experience with the tools that power modern data workflows —
      from ingestion and orchestration to processing and visualization.
    </p>
  </div>

  <div class="tools-static-grid">

    <!-- LEFT -->
    <div class="tools-column">
      <span class="tools-badge tools-badge-active">Pipelines & Processing</span>

      <div class="tool-chip">FastAPI – API Development</div>
      <div class="tool-chip">Apache Airflow – Workflow Orchestration</div>
      <div class="tool-chip">Apache Spark – Distributed Processing</div>
      <div class="tool-chip">Databricks – Unified Analytics Platform</div>
      <div class="tool-chip">Apache Kafka – Stream Processing</div>
    </div>

    <!-- RIGHT -->
    <div class="tools-column">
      <span class="tools-badge tools-badge-active">Storage & Analytics</span>

      <div class="tool-chip">MongoDB – NoSQL Databases</div>
      <div class="tool-chip">Elasticsearch – Log & Search Analytics</div>
      <div class="tool-chip">Snowflake – Cloud Data Warehousing</div>
      <div class="tool-chip">dbt – Modular Data Transformations</div>
    </div>

  </div>
</section>


                        <section class="skills-panel skill-track-section" data-level="4">

  <div class="cur-heading">
    <h4>04: Capstone Projects</h4>
    <p>
      Apply your skills in real-world scenarios across major cloud platforms
      and open-source ecosystems.
    </p>
  </div>

  <div class="capstone-grid">

    <!-- Card 1 -->
    <div class="capstone-card">
      <h5>Real-Time & Big Data Systems</h5>
      <ul>
        <li><i data-lucide="activity"></i> Kafka, Spark & MongoDB Streaming</li>
        <li><i data-lucide="database"></i> Big Data Processing on Hadoop</li>
        <li><i data-lucide="clock"></i> Time Series Storage & Visualization</li>
        <li><i data-lucide="search"></i> Elasticsearch-Based Contact Tracing</li>
      </ul>
    </div>

    <!-- Card 2 -->
    <div class="capstone-card">
      <h5>Cloud Data Engineering</h5>
      <ul>
        <li><i data-lucide="cloud"></i> AWS Data Engineering Workflow</li>
        <li><i data-lucide="cloud-cog"></i> Azure Data Engineering Pipeline</li>
        <li><i data-lucide="cloud-sun"></i> GCP Data Engineering Solutions</li>
        <li><i data-lucide="layers"></i> Modern Data Lakes & Warehouses</li>
      </ul>
    </div>

    <!-- Card 3 -->
    <div class="capstone-card">
      <h5>DevOps, ML & Infrastructure</h5>
      <ul>
        <li><i data-lucide="git-branch"></i> ML Pipelines & Containerization on AWS</li>
        <li><i data-lucide="package"></i> Dockerized ETL with AWS & Grafana</li>
        <li><i data-lucide="settings"></i> Infrastructure as Code with Terraform</li>
        <li><i data-lucide="workflow"></i> Azure Pipelines Automation</li>
      </ul>
    </div>

  </div>
</section>


                    </div>
                    </div>

                </div> 
                   
            </div>
    </div>
</div>

     <!-- Carriculum End -->


    

    <!-- Start Skills Presentation Area  -->
        <div class="container rbt-elements-presentation-area overflow-hidden bg-color-white rbt-section-gapBottom ">
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-head text-center" style="padding-bottom: 20px !important;">
                            <h2 class="section-headings">Focused on practical <span>Skills</span></h2>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class=" mt--30">
                        <div class="scroll-animation">
                            <!-- Start Single Testimonial  -->
                            <div class="single-column-100">
                                <div class="rbt-categori-list">
                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="assets/images/tools/aws.png" class="skill-img" alt="">
                                    </div>
                                    <span>AWS</span>
                                    </a>
                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/tools/Azure.png" class="skill-img" alt="">
                                    </div>
                                    <span>Azure</span>
                                    </a>
                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/Google-Cloud-Platform.jpeg" class="skill-img" alt="">
                                    </div>
                                    <span>Google Cloud Platform</span>
                                    </a>
                                    <a href="#"  class="skill-pill">
                                        <div class='skills-div'><img src="/assets/images/course/Apache-Airflow.svg" class="skill-img" alt="">
                                    </div>
                                    <span>Apache Airflow</span>
                                    </a>
                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/Apache-Kafka.png" class="skill-img" alt="">
                                    </div>
                                    <span>Apache Kafka</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/dbt.png" class="skill-img" alt="">
                                    </div>
                                    <span>dbt</span>
                                    </a>

                            
                                    

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/Docker.webp" class="skill-img" alt="">
                                    </div>
                                    <span>Docker</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/Terraform.png" class="skill-img" alt="">
                                    </div>
                                    <span>Terraform</span>
                                    </a>

                                    

                                </div>
                            </div>
                            <!-- End Single Testimonial  -->
                            
                        </div>
                    </div>

                    <div class=" mt--30">
                        <div class="scroll-animation">
                            <!-- Start Single Testimonial  -->
                            <div class="single-column-100">
                                <div class="rbt-categori-list">
                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/Snowflake.png" class="skill-img" alt="">
                                    </div>
                                    <span>Snowflake</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/Keras.png" class="skill-img" alt=""></div>
                                    <span>Keras</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/tableau.jpeg" class="skill-img" alt="">
                                    </div>
                                    <span>Tableau</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/MongoDB.webp" class="skill-img" alt="">
                                    </div>
                                    <span>MongoDB</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/PyTorch.jpg" class="skill-img" alt=""></div>
                                    <span>PyTorch</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/Kibana.png" class="skill-img" alt="">
                                    </div>
                                    <span>Kibana</span>
                                    </a>
                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/FastAPI.png" class="skill-img" alt=""></div>
                                    <span>FastAPI</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/Flask.jpg" class="skill-img" alt=""></div>
                                    <span>Flask</span>
                                    </a>

                                </div>
                            </div>
                            <!-- End Single Testimonial  -->
                        </div>
                    </div>

                    <div class=" mt--30">
                        <div class="scroll-animation">
                            <!-- Start Single Testimonial  -->
                            <div class="single-column-100">
                                <div class="rbt-categori-list">
                            <a href="#" class="skill-pill">
                            <div class="skills-div"><img src="/assets/images/course/CatBoost.png" class="skill-img" alt=""></div>
                            <span>CatBoost</span>
                            </a>
                            <a href="#" class="skill-pill">
                                <div class="skills-div"><img src="/assets/images/course/Git.png" class="skill-img" alt=""></div>
                                <span>Git</span>
                                </a>
                            

                            <a href="#" class="skill-pill">
                            <div class="skills-div"><img src="/assets/images/course/DagsHub.webp" class="skill-img" alt=""></div>
                            <span>DagsHub</span>
                            </a>

                            <a href="#" class="skill-pill">
                            <div class="skills-div"><img src="/assets/images/course/BentoML.png" class="skill-img" alt=""></div>
                            <span>BentoML</span>
                            </a>

                            <a href="#" class="skill-pill">
                            <div class="skills-div"><img src="/assets/images/course/Kubernetes.png" class="skill-img" alt=""></div>
                            <span>Kubernetes</span>
                            </a>

                            <a href="#" class="skill-pill">
                            <div class="skills-div"><img src="/assets/images/course/Helm.jpeg" class="skill-img" alt=""></div>
                            <span>Helm</span>
                            </a>

                            <a href="#" class="skill-pill">
                            <div class="skills-div"><img src="/assets/images/course/Power-BI.jpeg" class="skill-img" alt=""></div>
                            <span>Power BI</span>
                            </a>

                            <a href="#" class="skill-pill">
                            <div class="skills-div"><img src="/assets/images/course/Excel.jpeg" class="skill-img" alt=""></div>
                            <span>Excel</span>
                            </a>

                            <a href="#" class="skill-pill">
                            <div class="skills-div"><img src="/assets/images/course/Plotly.png" class="skill-img" alt=""></div>
                            <span>Plotly</span>
                            </a>
                            </div>
                            </div>
                            <!-- End Single Testimonial  -->
                        </div>
                    </div>
                    <div class=" mt--30">
                        <div class="scroll-animation">
                            <!-- Start Single Testimonial  -->
                            <div class="single-column-100">
                                <div class="rbt-categori-list">
                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/Matplotlib.png" class="skill-img" alt=""></div>
                                    <span>Matplotlib</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/Seaborn.png" class="skill-img" alt=""></div>
                                    <span>Seaborn</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/Apache-Spark.png" class="skill-img" alt=""></div>
                                    <span>Apache Spark</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/CI-CD-pipelines2.png" class="skill-img" alt=""></div>
                                    <span>CI/CD Pipelines</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/NUMPY-300x300.png" class="skill-img" alt=""></div>
                                    <span>NumPy</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/PANDAS.webp" class="skill-img" alt=""></div>
                                    <span>Pandas</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/XGBoost.png" class="skill-img" alt=""></div>
                                    <span>XGBoost</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Single Testimonial  -->
                        </div>
                    </div>

                    <div class=" mt--30">
                        <div class="scroll-animation">
                            <!-- Start Single Testimonial  -->
                            <div class="single-column-100">
                                <div class="rbt-categori-list">
                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/Streamlit.png" class="skill-img" alt=""></div>
                                    <span>Streamlit</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/Scikit-learn.jpeg" class="skill-img" alt=""></div>
                                    <span>Scikit-learn</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/LightGBM.png" class="skill-img" alt=""></div>
                                    <span>LightGBM</span>
                                    </a>

                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/TensorFlow.jpeg" class="skill-img" alt=""></div>
                                    <span>TensorFlow</span>
                                    </a>
                                    <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/Tableau-Prep.png" class="skill-img" alt="">
                                    </div>
                                    <span>Tableau Prep</span>
                                    </a>
                                <a href="#" class="skill-pill">
                                    <div class="skills-div">
                                        <img src="/assets/images/course/Elasticsearch.webp" class="skill-img" alt="">
                                    </div>
                                    <span>Elasticsearch</span>
                                    </a>
                                    
                                    <a href="#" class="skill-pill">
                                    <div class="skills-div"><img src="/assets/images/course/MLflow.jpeg" class="skill-img" alt=""></div>
                                    <span>MLflow</span>
                                    </a>
                                    
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
    <!-- End Skills Presentation Area  -->

    <!-- Start Enrollment & Kickstat -->
        <section class="program-highlights padding_bottom_100px transparent">
            <div class="container">
                <div class="section-head text-center" style="padding-bottom: 20px !important;">
                    <h2 class="section-headings">
                        Enroll & Kickstart Your <span>Journey</span>
                    </h2>
                    <p class="text_align_left">Everything you need to succeed, structured for real outcomes.</p>
                </div>

                <div class="highlights-grid">

                    <!-- Left Details -->
                    <div class="highlights-list">
                        <div class='key-highlights-div'>
                            <div class="highlight-item">
                            <h4>500+ Hours</h4>
                            <p>Live classes with industry experts.</p>
                            </div>

                            <div class="highlight-item">
                                <h4>30+ Projects</h4>
                                <p>Build a portfolio recruiters love.</p>
                            </div>
                        </div>

                        <div class="key-highlights-div">
                            <div class="highlight-item">
                            <h4>1:1 Sessions</h4>
                            <p>Personal mentorship & mock interviews.</p>
                        </div>

                        <div class="highlight-item">
                            <h4>Lifetime Access</h4>
                            <p>Keep learning forever.</p>
                        </div>
                        </div>
                        <div class="download-btn-div">
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

    <!-- Learn & Build Real-world projects Start -->
     <section class="program-highlights padding_bottom_100px transparent">
            <div class="container">

                

                

                    <!-- RIGHT RADAR -->
                     
                  @@include('radar-content.php')

            


        </div>
    </section>
     <!--End Learn & Build Real-world projects  -->



      <!-- Programming Cohorts start -->
      <section class="program-highlights padding_bottom_100px transparent">
            <div class="container">
                 <div class="section-head text-center" style="padding-bottom: 15px !important;">
                    <h2 class="section-headings">
                        Learn While You Intern <span>& Earn </span>
                    </h2>
                    <p class="text_align_left">
                    Unlock exclusive placement assistance and job referrals
                </div>
                @@include('earn-section.php')
            </div>
        </section>
     <!-- Programming Cohorts End -->


     <!-- Career launchpad and Resume Building Start -->
      <section class="program-highlights padding_bottom_100px transparent">
            <div class="container">

                <div class="section-head text-center" >
                    <h2 class="section-headings">
                        Career Launchpad & Resume <span>Building</span>
                    </h2>
                    <p class="text_align_left">
                        Prepare for your job with structured placement training
                    </p>
                </div>

                <div class="launchpad-grid" style="padding-top: 35px !important;">

                <!-- Card 1 -->
                <div class="flip-card">
                    <div class="flip-inner">
                        <div class="flip-front">
                            <div class="header-career-card">
                                <div class="front-icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="24" cy="24" r="20"
                                                stroke="#F59E0B" stroke-width="2"/>
                                        <circle cx="24" cy="24" r="12"
                                                stroke="#F59E0B" stroke-width="2" opacity="0.6"/>
                                        <circle cx="24" cy="24" r="4"
                                                fill="#F59E0B"/>
                                    </svg>
                                    <h3>Placement Training</h3>
                                </div>

                                 <!-- TOP VISUAL AREA -->
                                <!-- <div class="card-visual"> -->
                                <!-- your SVG or arrow graphic -->
                                <!-- <svg class="header-career-card-svg" width="120" height="120" viewBox="0 0 120 120" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 80L80 20V60H100V0H40V20H80L20 80Z"
                                        fill="url(#grad)"/>
                                    <defs>
                                    <linearGradient id="grad" x1="0" y1="0" x2="1" y2="1">
                                        <stop offset="0%" stop-color="#FDBA74"/>
                                        <stop offset="100%" stop-color="#F59E0B"/>
                                    </linearGradient>
                                    </defs>
                                </svg> -->
                                <!-- </div> -->
                            </div>
                        <div class="front-card-items">
                            <ul class="feature-list">

                                <li>
                                    <!-- Aptitude -->
                                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="9"
                                            stroke="#F59E0B" stroke-width="2"/>
                                    <path d="M12 7v5l3 3"
                                            stroke="#F59E0B" stroke-width="2"
                                            stroke-linecap="round"/>
                                    </svg>
                                    Aptitude Training
                                </li>

                                <li>
                                    <!-- Logical Reasoning -->
                                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 3h6v6H9z"
                                            stroke="#F59E0B" stroke-width="2"/>
                                    <path d="M4 15h6v6H4zM14 15h6v6h-6z"
                                            stroke="#F59E0B" stroke-width="2"/>
                                    </svg>
                                    Logical Reasoning
                                </li>

                                <li>
                                    <!-- Mock Tests -->
                                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                    <rect x="5" y="3" width="14" height="18" rx="2"
                                            stroke="#F59E0B" stroke-width="2"/>
                                    <path d="M8 8h8M8 12h8M8 16h5"
                                            stroke="#F59E0B" stroke-width="2"/>
                                    </svg>
                                    Mock Tests
                                </li>

                                <li>
                                    <!-- Interview Prep -->
                                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="7" r="4"
                                            stroke="#F59E0B" stroke-width="2"/>
                                    <path d="M4 21c1.5-4 14.5-4 16 0"
                                            stroke="#F59E0B" stroke-width="2"/>
                                    </svg>
                                    Interview Prep
                                </li>

                            </ul>

                        </div>
                       
                        <p class="card-cta">Hands-on experience</p>
                        <div class="l-shape">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>
                    
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flip-card">
                    <div class="flip-inner">
                    <div class="flip-front">
                        <div class="front-icon">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="6" width="28" height="36" rx="4"
                                    stroke="#F59E0B" stroke-width="2"/>
                            <line x1="16" y1="16" x2="32" y2="16"
                                    stroke="#F59E0B" stroke-width="2"/>
                            <line x1="16" y1="22" x2="32" y2="22"
                                    stroke="#F59E0B" stroke-width="2" opacity="0.7"/>
                            <line x1="16" y1="28" x2="26" y2="28"
                                    stroke="#F59E0B" stroke-width="2" opacity="0.5"/>
                            </svg>

                            <h3 >Resume Building</h3>
                        </div>
                        <div class="front-card-items">
                        <ul class="feature-list">

                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <rect x="5" y="3" width="14" height="18" rx="2"
                                        stroke="#F59E0B" stroke-width="2"/>
                                <path d="M8 7h8M8 11h6M8 15h4"
                                        stroke="#F59E0B" stroke-width="2"/>
                                </svg>
                                Resume Review
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 12h18"
                                        stroke="#F59E0B" stroke-width="2"/>
                                <path d="M6 9h12M6 15h12"
                                        stroke="#F59E0B" stroke-width="2"/>
                                <circle cx="9" cy="12" r="1.5" fill="#F59E0B"/>
                                <circle cx="15" cy="12" r="1.5" fill="#F59E0B"/>
                                </svg>
                                ATS Optimization
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="7" width="18" height="12" rx="2"
                                        stroke="#F59E0B" stroke-width="2"/>
                                <path d="M9 7V5h6v2"
                                        stroke="#F59E0B" stroke-width="2"/>
                                </svg>
                                Portfolio Creation
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="18" height="18" rx="2"
                                        stroke="#F59E0B" stroke-width="2"/>
                                <path d="M7 10v7M7 7h.01M11 10v7M11 13c0-1.5 3-1.5 3 0v4"
                                        stroke="#F59E0B" stroke-width="2"
                                        stroke-linecap="round"/>
                                </svg>
                                LinkedIn Setup
                            </li>

                            </ul>

                    </div>
                        
                        <p class="card-cta">ATS-friendly CV</p>
                        <!-- Bottom-right decorative shape -->
                         <span class="feature-shape-2"></span>
                            <div class="resume-shape-linkedin">
                            <img
                                src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/linkedin.svg"
                                alt="LinkedIn"
                            />
                            </div>

                    </div>
                    
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flip-card">
                    <div class="flip-inner">
                    <div class="flip-front">
                        <div class="front-icon">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="18"
                                    stroke="#F59E0B" stroke-width="2"/>
                            <polygon points="24,12 30,30 24,26 18,30"
                                    fill="#F59E0B"/>
                            </svg>
                            <h3>Career Guidance</h3>
                        </div>
                        <div class="front-card-items">
                        <ul class="feature-list">

                            <li>
                                <!-- Career Roadmap -->
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 21l6-6 4 4 8-8"
                                        stroke="#F59E0B" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                <circle cx="3" cy="21" r="1.5" fill="#F59E0B"/>
                                <circle cx="9" cy="15" r="1.5" fill="#F59E0B"/>
                                <circle cx="13" cy="19" r="1.5" fill="#F59E0B"/>
                                <circle cx="21" cy="11" r="1.5" fill="#F59E0B"/>
                                </svg>
                                Career Roadmap
                            </li>

                            <li>
                                <!-- Skill Gap Analysis -->
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="8" height="8"
                                        stroke="#F59E0B" stroke-width="2"/>
                                <rect x="13" y="13" width="8" height="8"
                                        stroke="#F59E0B" stroke-width="2"/>
                                <path d="M11 7h2M7 11v2"
                                        stroke="#F59E0B" stroke-width="2"/>
                                </svg>
                                Skill Gap Analysis
                            </li>

                            <li>
                                <!-- One-on-One Mentoring -->
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <circle cx="8" cy="8" r="3"
                                        stroke="#F59E0B" stroke-width="2"/>
                                <circle cx="16" cy="8" r="3"
                                        stroke="#F59E0B" stroke-width="2"/>
                                <path d="M2 21c1.5-4 9.5-4 11 0M11 21c1.5-4 9.5-4 11 0"
                                        stroke="#F59E0B" stroke-width="2"/>
                                </svg>
                                One-on-One Mentoring
                            </li>

                            <li>
                                <!-- Industry Insights -->
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 18h4V10H4v8zM10 18h4V6h-4v12zM16 18h4V13h-4v5z"
                                        stroke="#F59E0B" stroke-width="2"/>
                                </svg>
                                Industry Insights
                            </li>

                            </ul>

                    </div>
                        <p class="card-cta">Expert mentoring</p>
                        <img class='sparkle-feature' src="/assets/images/others/sparkle-show.png" alt="">
                        <div class="triangle-shape"> 
                            <img src="/assets/images/others/career-growth.png" alt="">
                        </div>
                    </div>
                    
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="flip-card">
                    <div class="flip-inner">
                    <div class="flip-front">

                        <div class="front-icon">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                            <rect x="6" y="10" width="36" height="24" rx="4"
                                    stroke="#F59E0B" stroke-width="2"/>
                            <polyline points="18,18 14,22 18,26"
                                        stroke="#F59E0B" stroke-width="2"
                                        fill="none"/>
                            <polyline points="30,18 34,22 30,26"
                                        stroke="#F59E0B" stroke-width="2"
                                        fill="none"/>
                            </svg>
                            <h3>Live Projects</h3>
                        </div>
                        <div class="front-card-items">
                       
                        <ul class="feature-list">
                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 5h16v14H4z" stroke="#F59E0B" stroke-width="2"/>
                                <path d="M4 9h16" stroke="#F59E0B" stroke-width="2"/>
                                </svg>
                                Real-world Projects
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 4H6v16h12V8l-4-4z" stroke="#F59E0B" stroke-width="2"/>
                                <path d="M8 12h8M8 16h6" stroke="#F59E0B" stroke-width="2"/>
                                </svg>
                                Code Reviews
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 6l-4 6 4 6" stroke="#F59E0B" stroke-width="2"/>
                                <path d="M16 6l4 6-4 6" stroke="#F59E0B" stroke-width="2"/>
                                </svg>
                                Git & Deployment
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="8" r="3" stroke="#F59E0B" stroke-width="2"/>
                                <path d="M4 20c1.5-4 14.5-4 16 0" stroke="#F59E0B" stroke-width="2"/>
                                </svg>
                                Project Certification
                            </li>


                        </ul>
                    </div>
                        
                        <p class="card-cta">Hands-on experience</p>
                    </div>
                    <div class="shape-wrapper-1">
                        <div class="shape-1 bottom"></div>
                        <div class="shape-1 top"></div> 
                    </div>
                    
                    </div>
                </div>

                </div>
            </div>
        </section>


     <!-- Career launchpad and Resume Building End -->


   


     <!-- Get placed in top companies start -->
        <section class="program-highlights padding_bottom_100px transparent">
            <div class="container">
                 <div class="section-head text-center" style="padding-bottom: 35px !important;"
                 >
                    <h2 class="section-headings">
                        Get placed with <span>Top Companies</span>
                    </h2>
                    <p class="text_align_left">
                    Unlock exclusive placement assistance and job referrals
                </div>
                @@include('topcomps.php')
            </div>
        </section>

     <!-- Get placed in top companies end -->


     

     <!-- Programming Cohorts start -->
      <section class="program-highlights padding_bottom_100px transparent">
            <div class="container">
                 <div class="section-head text-center" style="padding-bottom: 35px !important;">
                    <h2 class="section-headings">
                        Program <span>Cohorts</span>
                    </h2>
                    <p class="text_align_left">
                    Unlock exclusive placement assistance and job referrals
                </div>
                @@include('cohorts.php')
            </div>
        </section>
     <!-- Programming Cohorts End -->

     <!-- Programming Certificate start -->
      <section class="program-highlights padding_bottom_100px transparent">
            <div class="container">
                 <div class="section-head text-center pad-bottom-0px">
                    <h2 class="section-headings">
                        Program <span>Certificate</span>
                    </h2>
                    <p class="text_align_left">
                    This certifies successful completion of the thinqNxt Data Science program with hands-on practical expertise.
                </div>
                @@include('certificate.php')
            </div>
        </section>
     <!-- Programming Certificate End -->
     <!-- Programming Testimonials start -->
      <section class="program-highlights padding_bottom_100px transparent">
            <div class="container">
                 <div class="section-head text-center" style="padding-bottom: 30px !important;">
                    <h2 class="section-headings">
                      Real Stories. <span>Real Impact. </span>
                    </h2>
                    <p class="text_align_left">
                    People like ThinqNxt education. No joking - here’s the proof! 
                </div>
                @@include('testimonials.php')
            </div>
        </section>
     <!-- Programming Testimonials End -->

     <!-- Programming Founders start -->
      <section class="program-highlights padding_bottom_200px transparent">
            <div class="container">
                 <div class="section-head text-center" style="padding-bottom: 30px !important;">
                    <h2 class="section-headings">
                      Our <span>Founders Talk</span>
                    </h2>
                    <p class="text_align_left">
                    People like ThinqNxt education. No joking - here’s the proof! 
                </div>
                @@include('founders.php')
            </div>
        </section>
     <!-- Programming Founders End -->
      <!-- ThinqNXT blogs Start -->

        <section class="program-highlights padding_bottom_100px transparent">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="section-headings">
                       The ThinqNxt <span>Blogs</span>
                    </h2>
                    <p class="text_align_left">Insights on data science, analytics, and real-world problem-solving for practical, data-driven thinking.</p>
                </div>

                @@include('blogs.php')
            </div>
        </section>
     <!-- ThinqNXT blogs End -->

   <!-- FAQ'S section Start -->
        <section class="program-highlights  transparent">
            <div class="container">
                <div class="section-head text-center" style="padding-bottom: 30px !important;">
                    <h2 class="section-headings">
                       Frequently Asked <span>Questions</span>
                    </h2>
                    <p class="text_align_left">Everything you need to know about our programs and career outcomes.</p>
                </div>

                @@include('faq-section.php')
            </div>
        </section>
   <!-- FAQ'S section End -->

    

    <!-- @@include('separator.php') -->

    <div class="copyright-area copyright-style-1 ptb--20 bg-color-darker">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <p class="rbt-link-hover text-center color-white-off"> © 2026 All
                        rights reserved by <a href="https://www.pixcelsthemes.com"
                            class="color-white">ThinqNxt.</a></p>
                </div>
            </div>
        </div>
    </div>


    @@include('scripts.php')
 
<script src="https://unpkg.com/lucide@latest"></script>
<script>
(() => {
  const section = document.querySelector('.cur-con-sec');
  const panels  = [...document.querySelectorAll('.skills-panel')];
  const levels  = [...document.querySelectorAll('.py-level')];

  if (!section || !panels.length || !levels.length) return;

  const total = panels.length;
  let activeIndex = 0;

  /* --------------------------------
     🔑 DYNAMIC SCROLL HEIGHT (NEW)
  -------------------------------- */
  const setSectionHeight = () => {
    const vh = window.innerHeight;
    // panels + 1 viewport for clean exit
    section.style.height = `${(total + 1) * vh}px`;
  };

  setSectionHeight();
  window.addEventListener('resize', setSectionHeight);

  /* -------------------------------
     CREATE PYRAMID TITLES
  -------------------------------- */
  levels.forEach(level => {
    if (level.querySelector('.py-arrow-label')) return;

    const title = level.dataset.title;
    if (!title) return;

    const label = document.createElement('span');
    label.className = 'py-arrow-label';
    label.textContent = title;
    level.appendChild(label);
  });

  /* -------------------------------
     SCROLL → INDEX MAPPING
  -------------------------------- */
  window.addEventListener('scroll', () => {
    const rect = section.getBoundingClientRect();

    // usable scroll distance
    const max = Math.max(
      section.offsetHeight - window.innerHeight,
      1
    );

    // normalized progress (0 → 1)
    const progress = Math.min(
      Math.max(-rect.top / max, 0),
      1
    );

    // map progress to panel index
    const index = Math.min(
      Math.floor(progress * total),
      total - 1
    );

    if (index === activeIndex) return;
    activeIndex = index;

    /* CONTENT */
    panels.forEach((panel, i) => {
      panel.classList.toggle('is-active', i === activeIndex);
    });

    /* PYRAMID */
    levels.forEach((level, i) => {
      level.classList.toggle('py-active', i === activeIndex);
    });
  });
})();


// section 3 switch button

(() => {
  const tabs = document.querySelectorAll('.tool-tab');
  const groups = document.querySelectorAll('.tool-group');

  if (!tabs.length || !groups.length) return;

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const targetId = tab.dataset.target;

      /* ---- Toggle tabs ---- */
      tabs.forEach(t => t.classList.remove('is-active'));
      tab.classList.add('is-active');

      /* ---- Toggle content ---- */
      groups.forEach(group => {
        group.classList.toggle(
          'is-active',
          group.id === targetId
        );
      });
    });
  });
})();



</script>





</body>

</html>