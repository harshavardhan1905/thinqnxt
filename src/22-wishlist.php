@@include('styles.php',{
"title": "Wishlist"
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
        "gapSpaceBetween": "shadow-none",
        "container": "container",
        "navigationEnd": "rbt-navigation-center",
        "btnClass": "rbt-switch-btn btn-gradient btn-sm hover-transform-none",
        "btnText": "Join Us Today",
        })

    </header>
    @@include('header/mobilemenu.php')

    <main class="rbt-main-wrapper">
        <!-- Start Banner Area -->
        <div class="rbt-banner-area rbt-banner-22">
            <div class="wrapper">
                <div class="container">
                    <div class="inner">
                        <div class="shape-wrapper">
                            <div class="shape-1">
                                <img src="assets/images/shape/w-hello.png" alt="Banner Shape">
                            </div>
                            <div class="shape-2 scene">
                                <span data-depth="1">
                                    <img src="assets/images/shape/w-color-elemt.png" alt="Banner Shape">
                                </span>
                            </div>
                            <div class="shape-3 scene">
                                <span data-depth="1">
                                    <img src="assets/images/shape/w-tools-elemt.png" alt="Banner Shape">
                                </span>
                            </div>
                        </div>
                        <div class="content">
                            <h1 class="title">We’re making an course on <span class="theme-gradient cf_boundary">UX/UI <img id="cursorFollower" class="cursorFollower" src="assets/images/shape/w-cursor.png" alt="Cursor Icon"></span> Advanced</h1>
                            <p class="description">Training, Practice, Portfolio, Certificate, And Successful Career All In One.</p>
                            <form action="#" class="newsletter-form-1 radius-round">
                                <input class="rbt-border" type="email" placeholder="Enter Your Email">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse radius-round">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Join Wishlist</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </form>
                            <div class="students">
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
                                    <h6 class="number">2,364</h6>
                                    <p class="number-title">Students already joined</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="shape-shadow">
                            <img src="assets/images/shape/w-shadow.png" alt="Banner Shadow">
                        </div>
                        <div class="browser">
                            <div class="browser-img">
                                <img src="assets/images/banner/w-banner.png" alt="Banner Brwoser">
                            </div>
                            <video autoplay muted loop>
                                <source src="assets/images/video/wishlist-video-01.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Course Area -->
        <div class="rbt-course-area rbt-section-gapBottom">
            <div class="container">
                <div class="section-title-2 text-center with-shape mb--170 mb_lg--100 mb_md--100 mb_sm--100">
                    <div class="shape-1" data-parallax='{"x": 0, "y": 130}'>
                        <img src="assets/images/shape/wishlist-title-bg-shape.png" alt="Shape">
                    </div>
                    <h2 class="title">A design tool <span class="color-body">(Figma)</span> for crafting engaging UI/UX <span class="color-body">design experiences</span> and visual assets with <span class="theme-gradient">Histudy.</span></h2>
                </div>
                <div class="row g-5">

                    <!-- Start Single Card  -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-sal-delay="0" data-sal="slide-up"
                    data-sal-duration="800">
                        <div class="rbt-card variation-03 style_2">
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title">Learn UX/UI Design, (Figma) Zero To Mastery
                                </h5>
                                <p class="rbt-card-text">Take yourself a step further stay with me.</p>
                            </div>
                            <div class="rbt-card-img">
                                <img src="assets/images/course/wishlist-course-01.png" alt="Card image">
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-sal-delay="0" data-sal="slide-up"
                    data-sal-duration="800">
                        <div class="rbt-card variation-03 style_2">
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title">26 Lessons And 180 Hours
                                </h5>
                                <p class="rbt-card-text">We will teach different parts of each chapter, such as Typography, Prototype, Color, and many more.</p>
                            </div>
                            <div class="rbt-card-img">
                                <img class="w-100" src="assets/images/course/wishlist-course-02.gif" alt="Card image">
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up"
                    data-sal-duration="800">
                        <div class="rbt-card variation-03 style_2">
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title">Know About Figma, PS, XD, AI
                                </h5>
                                <p class="rbt-card-text">The tools needed for the job will be taught.</p>
                            </div>
                            <div class="rbt-card-img">
                                <img src="assets/images/course/wishlist-course-03.png" alt="Card image">
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up"
                    data-sal-duration="800">
                        <div class="rbt-card variation-03 style_2">
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title">Learn Offline & Online
                                </h5>
                                <p class="rbt-card-text">The tools needed for the job will be taught.</p>
                            </div>
                            <div class="rbt-card-img">
                                <img src="assets/images/course/wishlist-course-04.png" alt="Card image">
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                        <div class="rbt-card variation-03 style_2 card-horizontal">
                            <div class="rbt-card-body">
                                <h6>
                                    <span class="theme-gradient">Support System</span>
                                </h6>
                                <h5 class="rbt-card-title">I’m <span><img src="assets/images/shape/wishlist-text-shape-01.png" alt="Shape"></span> Always With You, To Solve Any<span><img src="assets/images/shape/wishlist-text-shape-02.png" alt="Shape"></span>Problem</h5>
                                <p class="rbt-card-text">Feel free to let me know if there is any problem with the work and solve it.</p>
                            </div>
                            <div class="rbt-card-img-wrap">
                                <div class="shape-1">
                                    <img src="assets/images/shape/wishlist-dots.png" alt="Shape">
                                </div>
                                <div class="men-circle">
                                    <img src="assets/images/shape/wishlist-b-men.png" alt="Shape">
                                </div>
                                <div class="rbt-card-img">
                                    <img src="assets/images/course/wishlist-course-05.png" alt="Card image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                </div>
            </div>
        </div>
        <!-- End Course Area -->

        @@include('footer/footerFive.php')
    </main>
    
    @@include('scripts.php')
</body>

</html>