@@include('styles.php',{
"title": "Quiz with individual point"
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
                                <div class="mb--80" id="question-1">
                                    <div class="rbt-single-quiz">
                                        <h4>1. What is the capital of France?</h4>
                                        <div class="mb--10"><span>Mark: <strong> 1.00</strong></span></div>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <p class="rbt-checkbox-wrapper mb--5"><input id="rbt-checkbox-1"
                                                        name="rbt-checkbox-1" type="checkbox" value="yes"><label
                                                        for="rbt-checkbox-1">Option One</label></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="rbt-checkbox-wrapper"><input id="rbt-checkbox-2"
                                                        name="rbt-checkbox-2" type="checkbox" value="yes"><label
                                                        for="rbt-checkbox-2">Option Two</label></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="rbt-checkbox-wrapper"><input id="rbt-checkbox-3"
                                                        name="rbt-checkbox-3" type="checkbox" value="yes"><label
                                                        for="rbt-checkbox-3">Option Three</label></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="rbt-checkbox-wrapper"><input id="rbt-checkbox-4"
                                                        name="rbt-checkbox-4" type="checkbox" value="yes"><label
                                                        for="rbt-checkbox-4">Option Four</label></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb--80" id="question-2">
                                    <div class="rbt-single-quiz">
                                        <h4>2. What is the Javascript?</h4>
                                        <div class="mb--10"><span>Mark: <strong> 2.00</strong></span></div>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <div class="rbt-form-check"><input class="form-check-input" type="radio"
                                                        name="rbt-radio" id="rbt-radio-1"><label
                                                        class="form-check-label" for="rbt-radio-1">Option One</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="rbt-form-check"><input class="form-check-input" type="radio"
                                                        name="rbt-radio" id="rbt-radio-2"><label
                                                        class="form-check-label" for="rbt-radio-2">Option Two</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="rbt-form-check"><input class="form-check-input" type="radio"
                                                        name="rbt-radio" id="rbt-radio-3"><label
                                                        class="form-check-label" for="rbt-radio-3">Option Three</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="rbt-form-check"><input class="form-check-input" type="radio"
                                                        name="rbt-radio" id="rbt-radio-4"><label
                                                        class="form-check-label" for="rbt-radio-4">Option Four</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb--80" id="question-3">
                                    <div class="rbt-single-quiz">
                                        <h4>3. NextJs is a Framework?</h4>
                                        <div class="mb--10"><span>Mark: <strong> 1.00</strong></span></div>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <div class="rbt-form-check"><input class="form-check-input" type="radio"
                                                        name="rbt-single-select" id="rbt-single-select-10"><label
                                                        class="form-check-label" for="rbt-single-select-10">True</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="rbt-form-check"><input class="form-check-input" type="radio"
                                                        name="rbt-single-select" id="rbt-single-select-20"><label
                                                        class="form-check-label"
                                                        for="rbt-single-select-20">False</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb--80" id="question-4">
                                    <div class="rbt-single-quiz">
                                        <h4>4. Fill in the Blanks</h4>
                                        <div class="mb--10"><span>Mark: <strong> 3.00</strong></span></div>
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="rbt-form-chec" style="line-height: 55px;"><span
                                                        class="form-check-label">Next.js is a
                                                        popular</span><input class="form-blank-input mx-2"
                                                        type="text"><span class="form-check-label">framework
                                                    </span><span class="form-check-label">built on top of
                                                    </span><input class="form-blank-input mx-2" type="text"><span
                                                        class="form-check-label">.It
                                                        enables developers to create</span><input
                                                        class="form-blank-input mx-2" type="text"><span
                                                        class="form-check-label">applications with features such
                                                        as</span><input class="form-blank-input mx-2" type="text"><span
                                                        class="form-check-label"> rendering and
                                                    </span><input class="form-blank-input mx-2" type="text"><span
                                                        class="form-check-label">
                                                        generation. </span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb--80" id="question-5">
                                    <div class="rbt-single-quiz">
                                        <h4>5. What are the key features of Next.js ?</h4>
                                        <div class="mb--10"><span>Mark: <strong> 3.00</strong></span></div>
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
                                                class="btn-text">Submit Quiz</span><span class="btn-icon"><i
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