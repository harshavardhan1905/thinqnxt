@@include('styles.php',{
    "title": "Gallery"
})
<body class="rbt-header-sticky">

    @@include('header/package/header-style-10.php')

    @@include('common/breadcrumb.php', {
        "title": "Gallery",
        "title2": "Gallery"
    })

    <div class="rbt-gallery-area">
        @@include('gallery/gallery-1.php')
    </div>

    

    @@include('footer/footerOne.php')
    @@include('scripts.php')
</body>
</html>
