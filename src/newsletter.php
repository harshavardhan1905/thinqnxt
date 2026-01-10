@@include('styles.php',{
    "title": "Newsletter"
})
<body class="rbt-header-sticky">

    @@include('header/package/header-style-10.php')

    @@include('common/breadcrumb.php', {
        "title": "Newsletter",
        "title2": "Newsletter"
    })

    <div class="rbt-newsletter-area bg-color-white rbt-section-gap">
        @@include('newsletter/newsletter-1.php')
    </div>

    <div class="rbt-newsletter-area newsletter-style-2 bg-color-primary rbt-section-gap">
        @@include('newsletter/newsletter-2.php')
    </div>

    <div class="rbt-newsletter-area bg-gradient-6 ptb--50">
        @@include('newsletter/newsletter-3.php')
    </div>

    <!-- Start Newsletter Area  -->
    <div class="rbt-newsletter-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @@include('newsletter/newsletter-4.php')
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter Area  -->

    @@include('separator.php')
    @@include('footer/footerOne.php')
    @@include('scripts.php')
</body>
</html>
