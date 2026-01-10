@@include('styles.php',{
    "title": "Pricing"
})
<body class="rbt-header-sticky">

    @@include('header/package/header-style-10.php')
    @@include('common/breadcrumb.php', {
        "title": "Pricing",
        "title2": "Pricing"
    })
    
    <div class="rbt-pricing-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-primary-opacity">COURSE PRICING</span>
                        <h2 class="title">Style One</h2>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pricing-billing-duration text-start text-md-end">
                        <ul>
                            <li class="nav-item">
                                <button class="nav-link yearly-plan-btn" type="button">Yearly Plan</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link monthly-plan-btn active" type="button">Monthly Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @@include('pricing/pricingOne.php')
        </div>
    </div>
    
    <div class="rbt-pricing-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">COURSE PRICING</span>
                        <h2 class="title">Style Two</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pricing-billing-duration text-start text-md-end">
                        <ul>
                            <li class="nav-item">
                                <button class="nav-link yearly-plan-btn" type="button">Yearly Plan</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link monthly-plan-btn active" type="button">Monthly Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @@include('pricing/pricingTwo.php')
        </div>
    </div>
    
    <div class="rbt-pricing-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-secondary-opacity">COURSE PRICING</span>
                        <h2 class="title">Style Three</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pricing-billing-duration text-start text-md-end">
                        <ul>
                            <li class="nav-item">
                                <button class="nav-link yearly-plan-btn" type="button">Yearly Plan</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link monthly-plan-btn active" type="button">Monthly Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @@include('pricing/pricingThree.php')
        </div>
    </div>

    <div class="rbt-pricing-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">COURSE PRICING</span>
                        <h2 class="title">Style Four</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pricing-billing-duration text-start text-md-end">
                        <ul>
                            <li class="nav-item">
                                <button class="nav-link yearly-plan-btn" type="button">Yearly Plan</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link monthly-plan-btn active" type="button">Monthly Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @@include('pricing/pricingFour.php')
        </div>
    </div>

    <div class="rbt-pricing-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">COURSE PRICING</span>
                        <h2 class="title">Style Five</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @@include('pricing/pricingFive.php')
            </div>
        </div>
    </div>

    @@include('separator.php')
    @@include('footer/footerOne.php')
    @@include('scripts.php')
</body>
</html>
