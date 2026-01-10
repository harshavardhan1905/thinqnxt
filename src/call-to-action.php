@@include('styles.php',{
    "title": "Call To Action"
})
<body class="rbt-header-sticky">

    @@include('header/package/header-style-10.php')

    @@include('common/breadcrumb.php', {
        "title": "Call To Action",
        "title2": "Call To Action"
    })

    <!-- Start Call To Action  -->
    <div class="rbt-callto-action-area bg-color-white rbt-section-gap">
        @@include('calltoaction/calltoaction.php')
    </div>
    <!-- End Call To Action  -->


    <!-- Start Call To Action  -->
    <div class="rbt-callto-action-area bg-color-extra2 rbt-section-gap">
        <div class="wrapper">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-violet-opacity">CALL TO ACTION</span>
                            <h2 class="title">Style Two</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @@include('calltoaction/calltoaction-2.php')
    </div>
    <!-- End Call To Action  -->

    <!-- Start Call To Action  -->
    <div class="rbt-callto-action-area bg-color-white rbt-section-gap">
        <div class="wrapper">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-violet-opacity">CALL TO ACTION</span>
                            <h2 class="title">Style Three</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @@include('calltoaction/calltoaction-3.php')
    </div>
    <!-- End Call To Action  -->

    <!-- Start Call To Action  -->
    <div class="rbt-callto-action-area">
        @@include('calltoaction/calltoaction-4.php', {
            "btnClass": "rbt-btn btn-gradient hover-icon-reverse"
        })
    </div>
    <!-- End Call To Action  -->


    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area rbt-section-gap bg-color-extra2">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        @@include('calltoaction/calltoaction-5.php')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CallTo Action Area  -->


    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area rbt-section-gap bg-gradient-8">
        @@include('calltoaction/calltoaction-6.php')
    </div>
    <!-- End CallTo Action Area  -->

    @@include('footer/footerOne.php')
    @@include('scripts.php')
</body>
</html>
