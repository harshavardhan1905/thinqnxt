@@include('styles.php',{
    "title": "Categories"
})
<body class="rbt-header-sticky">

    @@include('header/package/header-style-10.php')

    @@include('common/breadcrumb.php', {
        "title": "Categories",
        "title2": "Categories"
    })
    
    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h5 class="title">Style One</h5>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30">
                @@include('category/category-1.php')
            </div>
        </div>
    </div>

    <div class="rbt-categories-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--40">
                        <h5 class="title">Style Two</h5>
                    </div>
                </div>
            </div>
            
            @@include('category/category-2.php')
        </div>
    </div>

    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <h5 class="title">Style Three</h5>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                @@include('category/category-3.php')
            </div>

            <div class="row mt--60">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <h5 class="title">Carousel (Slider)</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    @@include('category/category-3-carousel.php')
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-categories-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <h5 class="title">Style Four</h5>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @@include('category/category-4.php')
            </div>
        </div>
    </div>

    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <h5 class="title">Style Five</h5>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @@include('category/category-5.php')
            </div>
        </div>
    </div>

    <div class="rbt-categories-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <h5 class="title">Style Six</h5>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- For Gym  -->
                @@include('category/category-6.php')
            </div>
        </div>
    </div>

    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <h5 class="title">Style Seven</h5>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @@include('category/category-7.php')
            </div>
        </div>
    </div>

    <div class="rbt-categories-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <h5 class="title">Style Eight</h5>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @@include('category/category-8.php')
            </div>
        </div>
    </div>

    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <h5 class="title">Style Nine</h5>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @@include('category/category-9.php')
            </div>
        </div>
    </div>

    <div class="rbt-categories-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--30">
                        <h5 class="title">Style Ten</h5>
                    </div>
                </div>
            </div>
            @@include('category/category-10.php')
        </div>
    </div>

    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--30">
                        <h5 class="title">Style 11</h5>
                    </div>
                </div>
            </div>
            @@include('category/category-11.php')
            
        </div>
    </div>


    @@include('separator.php')
    @@include('footer/footerOne.php')
    @@include('scripts.php')
</body>
</html>
