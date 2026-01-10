@@include('styles.php',{
"title": "Lesson"
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
                        <form id="quiz-form" class="quiz-form-wrapper">
                            <!-- Start Single Quiz  -->
                            <div id="question-1" class="question">
                                <div class="quize-top-meta">
                                    <div class="quize-top-left">
                                        <span>Questions No: <strong>1/5</strong></span>
                                        <span>Attempts Allowed: <strong>1</strong></span>
                                    </div>
                                    <div class="quize-top-right">
                                        <span>Time remaining: <strong>No Limit</strong></span>
                                    </div>
                                </div>
                                <hr>
                                <div class="rbt-single-quiz">
                                    <h4>1. What is the capital of France?</h4>
                                    <div class="row g-3 mt--10">
                                        <div class="col-lg-6">
                                            <p class="rbt-checkbox-wrapper mb--5">
                                                <input id="rbt-checkbox-1" name="rbt-checkbox-1" type="checkbox"
                                                    value="yes">
                                                <label for="rbt-checkbox-1">Option One</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="rbt-checkbox-wrapper">
                                                <input id="rbt-checkbox-2" name="rbt-checkbox-2" type="checkbox"
                                                    value="yes">
                                                <label for="rbt-checkbox-2">Option Two</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="rbt-checkbox-wrapper">
                                                <input id="rbt-checkbox-3" name="rbt-checkbox-3" type="checkbox"
                                                    value="yes">
                                                <label for="rbt-checkbox-3">Option Three</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="rbt-checkbox-wrapper">
                                                <input id="rbt-checkbox-4" name="rbt-checkbox-4" type="checkbox"
                                                    value="yes">
                                                <label for="rbt-checkbox-4">Option Four</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Quiz  -->

                            <!-- Start Single Quiz  -->
                            <div id="question-2" class="question">
                                <div class="quize-top-meta">
                                    <div class="quize-top-left">
                                        <span>Questions No: <strong>2/5</strong></span>
                                        <span>Attempts Allowed: <strong>2</strong></span>
                                    </div>
                                    <div class="quize-top-right">
                                        <span>Time remaining: <strong>No Limit</strong></span>
                                    </div>
                                </div>
                                <hr>
                                <div class="rbt-single-quiz">
                                    <h4>2. What is the Javascript?</h4>
                                    <div class="row g-3 mt--10">
                                        <div class="col-lg-6">
                                            <div class="rbt-form-check">
                                                <input class="form-check-input" type="radio" name="rbt-radio"
                                                    id="rbt-radio-1">
                                                <label class="form-check-label" for="rbt-radio-1"> Option One</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="rbt-form-check">
                                                <input class="form-check-input" type="radio" name="rbt-radio"
                                                    id="rbt-radio-2">
                                                <label class="form-check-label" for="rbt-radio-2"> Option Two</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="rbt-form-check">
                                                <input class="form-check-input" type="radio" name="rbt-radio"
                                                    id="rbt-radio-3">
                                                <label class="form-check-label" for="rbt-radio-3"> Option Three</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="rbt-form-check">
                                                <input class="form-check-input" type="radio" name="rbt-radio"
                                                    id="rbt-radio-4">
                                                <label class="form-check-label" for="rbt-radio-4"> Option Four</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Quiz  -->

                            <!-- Start Single Quiz  -->
                            <div id="question-3" class="question">
                                <div class="quize-top-meta">
                                    <div class="quize-top-left">
                                        <span>Questions No: <strong>3/5</strong></span>
                                        <span>Attempts Allowed: <strong>2</strong></span>
                                    </div>
                                    <div class="quize-top-right">
                                        <span>Time remaining: <strong>No Limit</strong></span>
                                    </div>
                                </div>
                                <hr>
                                <div class="rbt-single-quiz">
                                    <h4>3. NextJs is a Framework?</h4>
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
                                                    class="form-check-label" for="rbt-single-select-20">False</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Quiz  -->

                            <!-- Start Single Quiz  -->
                            <div id="question-4" class="question">
                                <div class="quize-top-meta">
                                    <div class="quize-top-left">
                                        <span>Questions No: <strong>4/5</strong></span>
                                        <span>Attempts Allowed: <strong>2</strong></span>
                                    </div>
                                    <div class="quize-top-right">
                                        <span>Time remaining: <strong>No Limit</strong></span>
                                    </div>
                                </div>
                                <hr>
                                <div class="rbt-single-quiz">
                                    <h4>4. Fill in the Blanks</h4>
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="rbt-form-chec" style="line-height: 55px;"><span
                                                    class="form-check-label">Next.js is a
                                                    popular</span><input class="form-blank-input mx-2" type="text"><span
                                                    class="form-check-label">framework
                                                </span><span class="form-check-label">built on top of
                                                </span><input class="form-blank-input mx-2" type="text"><span
                                                    class="form-check-label">.It
                                                    enables developers to create</span><input
                                                    class="form-blank-input mx-2" type="text"><span
                                                    class="form-check-label">applications with features such
                                                    as</span><input class="form-blank-input mx-2" type="text"><span
                                                    class="form-check-label"> rendering
                                                    and
                                                </span><input class="form-blank-input mx-2" type="text"><span
                                                    class="form-check-label">
                                                    generation. </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Quiz  -->

                            <!-- Start Single Quiz  -->
                            <div id="question-5" class="question">
                                <div class="quize-top-meta">
                                    <div class="quize-top-left">
                                        <span>Questions No: <strong>5/5</strong></span>
                                        <span>Attempts Allowed: <strong>2</strong></span>
                                    </div>
                                    <div class="quize-top-right">
                                        <span>Time remaining: <strong>No Limit</strong></span>
                                    </div>
                                </div>
                                <hr>
                                <div class="rbt-single-quiz">
                                    <h4>5. What are the key features of Next.js ?</h4>
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="rbt-form-chec">
                                                <div class="form-group mb--10">
                                                    <textarea id="answerTextArea" placeholder="Write Answer"></textarea>
                                                    <span class="focus-border"></span>
                                                </div><span class="chr">Character
                                                    Remaining: 500</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Quiz  -->

                            <div class="rbt-quiz-btn-wrapper mt--30">
                                <button class="rbt-btn bg-primary-opacity btn-sm" id="prev-btn"
                                    type="button">Previous</button>
                                <button class="rbt-btn bg-primary-opacity btn-sm" id="next-btn"
                                    type="button">Next</button>
                                <a href="lesson-quiz-result.php" class="rbt-btn btn-gradient btn-sm"
                                    id="submit-btn">Submit</a>
                            </div>

                        </form>
                    </div>
                </div>

                @@include('lesson/lesson-pagination.php')

            </div>
        </div>
    </div>

    @@include('scripts.php')
</body>

</html>