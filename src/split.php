@@include('styles.php',{
    "title": "Split"
})
<body class="rbt-header-sticky">
    @@include('header/package/header-style-10.php')
    @@include('common/breadcrumb.php', {
        "title": "Split",
        "title2": "Split"
    })

    <div class="rbt-split-area bg-color-white rbt-section-gapTop overflow-hidden">
        <div class="wrapper">
            <div class="section-title text-center mb--60">
                <span class="subtitle bg-secondary-opacity">University Status</span>
                <h2 class="title">University Overview.</h2>
            </div>
            @@include('split/split-1.php')
        </div>
    </div>

    <!-- Start Button Area  -->
    <div class="rbt-video-area rbt-section-gap bg-color-white">
        <div class="container">
            @@include('split/split-2.php')
        </div>
    </div>
    <!-- End Button Area  -->
    
    @@include('separator.php')
    @@include('footer/footerOne.php')
    @@include('scripts.php')
</body>
</html>
