@@include('styles.php',{
"title": "Lesson"
})

<body class="rbt-header-sticky">

    <div class="rbt-lesson-area bg-color-white">
        <div class="rbt-lesson-content-wrapper">
            <div class="rbt-lesson-leftsidebar">
                @@include('lesson/lesson-sidebar.php')
            </div>

            <div class="rbt-lesson-rightsidebar overflow-hidden lesson-video">
                @@include('lesson/lesson-top.php')
                <div class="inner">
                    <div class="plyr__video-embed rbtplayer">
                        <iframe src="https://www.youtube.com/embed/qKzhrXqT6oE" allowfullscreen
                            allow="autoplay"></iframe>
                    </div>
                    <div class="content">
                        <div class="section-title">
                            <h4>About Lesson</h4>
                            <p>Let us analyze the greatest hits of the past and learn what makes these tracks so
                                special. </p>
                        </div>
                    </div>
                </div>

                @@include('lesson/lesson-pagination.php')

            </div>
        </div>
    </div>


    @@include('scripts.php')
</body>

</html>