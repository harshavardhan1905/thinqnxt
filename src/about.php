@@include('styles.php',{
    "title": "About"
})
<body class="rbt-header-sticky">

    @@include('header/package/header-style-10.php')

    @@include('common/breadcrumb.php', {
        "title": "About",
        "title2": "About"
    })

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        @@include('about/about-1.php')
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        @@include('about/about-2.php')
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        @@include('about/about-3.php')
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        @@include('about/about-4.php')
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        @@include('about/about-5.php')
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        @@include('about/about-6.php', {
            "btnClass": "radius rbt-marquee-btn marquee-text-y",
            "btnText": "Learn More"
        })
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        @@include('about/about-7.php')
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        @@include('about/about-8.php')
    </div>


    @@include('footer/footerOne.php')
    @@include('scripts.php')
</body>
</html>
