@@include('styles.php',{
"title": "Questions Type"
})

<body class="rbt-header-sticky">

    <div class="rbt-lesson-area bg-color-white">
        <div class="rbt-lesson-content-wrapper">
            <div class="rbt-lesson-leftsidebar">
                @@include('lesson/lesson-sidebar.php')
            </div>

            <div class="rbt-lesson-rightsidebar overflow-hidden">
                @@include('lesson/lesson-top.php')
                <div class="inner">
            <div class="content">
                <div class="section-title">
                    <p class="mb--10">Quiz</p>
                    <h5>Questions Types</h5>
                </div>
                <hr>
                <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                    <div class="rbt-lesson-area bg-color-white">
                        <div class="rbt-lesson-content-wrapper">
                            <div class="inner py-0">
                                <div class="section-title">
                                    <p>At Histudy, we offer a variety of<strong> 8 interactive quiz types </strong>designed to
                                        enhance the learning experience. Our quizzes are an excellent tool for assessing students'
                                        knowledge, making education both engaging and effective. With Histudy, learning is not just
                                        informative but also enjoyable.</p>
                                    <ul class="rbt-list-style-1">
                                        <li>1. True/False</li>
                                        <li>2. Single Choice </li>
                                        <li>3. Multiple Choice </li>
                                        <li>4. Open Ended</li>
                                        <li>5. Fill in the Blanks</li>
                                        <li>6. Sort Answer</li>
                                        <li>7. Matching</li>
                                        <li>8. Image Matching</li>
                                    </ul>
                                </div><a class="rbt-btn btn-gradient hover-icon-reverse mt--30" href="all-questions.php"><span
                                        class="icon-reverse-wrapper"><span class="btn-text">Start Quiz</span><span
                                            class="btn-icon"><i class="feather-arrow-right"></i></span><span class="btn-icon"><i
                                                class="feather-arrow-right"></i></span></span></a>
                            </div>
                        </div>
                    </div>
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