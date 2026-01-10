@@include('styles.php',{
    "title": "Brand"
})
<body class="rbt-header-sticky">

    @@include('header/package/header-style-10.php')

    @@include('common/breadcrumb.php', {
        "title": "Brand",
        "title2": "Brand"
    })

    <div class="rbt-brand-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row align-items-center g-5">
                @@include('brand/brand-1.php')
            </div>
        </div>
    </div>

    <div class="rbt-brand-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    @@include('brand/brand-2.php')
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-brand-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--40">
                        <span class="small-title w-600">The Best Trasted Client in This Education World</span>
                    </div>
                    @@include('brand/brand-3.php')
                </div>
            </div>
        </div>
    </div>

    @@include('separator.php')
    @@include('footer/footerOne.php')
    @@include('scripts.php')
</body>
</html>
