@@include('styles.php',{
    "title": "Instagram"
})
<body class="rbt-header-sticky">
    @@include('header/package/header-style-10.php')

    @@include('common/breadcrumb.php', {
        "title": "Instagram",
        "title2": "Instagram"
    })

    <div class="rbt-instagram-area bg-color-white rbt-section-gap">
        @@include('common/instagram.php')
    </div>
    
    @@include('separator.php')
    @@include('footer/footerOne.php')
    @@include('scripts.php')
</body>
</html>
