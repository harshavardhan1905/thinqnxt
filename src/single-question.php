@@include('styles.php',{
"title": "Single Question"
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
                        <div class="quize-top-meta">
                            <div class="quize-top-left"><span>Questions No:<strong>1/10</strong></span><span>Attempts
                                    Allowed:
                                    <strong>1/20</strong></span></div>
                        </div>
                        <hr>
                        <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30 overflow-hidden">
                            <form id="quiz-form" class="quiz-form-wrapper">
                                <div class="mb--80" id="question-5">
                                    <div class="rbt-single-quiz">
                                        <h4>1. What are the key features of Next.js ?</h4>
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="rbt-form-chec">
                                                    <div class="form-group mb--10">
                                                        <textarea id="answerTextArea"
                                                            placeholder="Write Answer"></textarea>
                                                        <span class="focus-border"></span>
                                                    </div><span class="chr">Character
                                                        Remaining: 500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn mt--20"><a class="rbt-btn btn-gradient hover-icon-reverse"
                                        href="lesson-quiz-result.php"><span class="icon-reverse-wrapper"><span
                                                class="btn-text">Submit & Next</span><span class="btn-icon"><i
                                                    class="feather-arrow-right"></i></span><span class="btn-icon"><i
                                                    class="feather-arrow-right"></i></span></span></a></div>
                            </form>
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