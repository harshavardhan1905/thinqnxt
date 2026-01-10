@@include('styles.php',{
"title": "Header"
})

<body >
    @@include('header/package/header-style-10.php')
    
    @@include('common/breadcrumb.php', {
        "title": "Header",
        "title2": "Header"
    })

    <main class="main-wrapper">
        <div class="header-thumbnail">
            <img class="w-100" src="assets/images/others/header.png" alt="header">
        </div>
    </main>



    @@include('separator.php')
    @@include('footer/footerOne.php')
    @@include('scripts.php')

</body>

</html>