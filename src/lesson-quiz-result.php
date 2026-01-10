@@include('styles.php',{
"title": "Lesson Quiz Result"
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
                            <h5>Musical Theory</h5>
                        </div>
                        <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                            <table class="rbt-table rbt-table-scroll table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Question</th>
                                        <th>Total Marks</th>
                                        <th>Correct Answer</th>
                                        <th>Incorrect Answer</th>
                                        <th>Earned Marks</th>
                                        <th>Result</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            <p class="b3 mb--5">December 26, 2025</p>
                                        </th>
                                        <td>
                                            <p class="b3">4</p>
                                        </td>
                                        <td>
                                            <p class="b3">8</p>
                                        </td>
                                        <td>
                                            <p class="b3">4</p>
                                        </td>
                                        <td>
                                            <p class="b3">4</p>
                                        </td>
                                        <td>
                                            <p class="b3">0</p>
                                        </td>
                                        <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Pass</span>
                                        </td>
                                        <td><button class="rbt-btn btn-border rbt-sm-btn-2" type="button"><span
                                                    class="icon-reverse-wrapper"><span class="btn-text">Details
                                                    </span></span></button></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="b3 mb--5">December 26, 2025</p>
                                        </th>
                                        <td>
                                            <p class="b3">4</p>
                                        </td>
                                        <td>
                                            <p class="b3">8</p>
                                        </td>
                                        <td>
                                            <p class="b3">4</p>
                                        </td>
                                        <td>
                                            <p class="b3">0</p>
                                        </td>
                                        <td>
                                            <p class="b3">0</p>
                                        </td>
                                        <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Pass</span>
                                        </td>
                                        <td><button class="rbt-btn btn-border rbt-sm-btn-2" type="button"><span
                                                    class="icon-reverse-wrapper"><span class="btn-text">Details
                                                    </span></span></button></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="b3 mb--5">December 26, 2025</p>
                                        </th>
                                        <td>
                                            <p class="b3">4</p>
                                        </td>
                                        <td>
                                            <p class="b3">8</p>
                                        </td>
                                        <td>
                                            <p class="b3">4</p>
                                        </td>
                                        <td>
                                            <p class="b3">0</p>
                                        </td>
                                        <td>
                                            <p class="b3">0</p>
                                        </td>
                                        <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Pass</span>
                                        </td>
                                        <td><button class="rbt-btn btn-border rbt-sm-btn-2" type="button"><span
                                                    class="icon-reverse-wrapper"><span class="btn-text">Details
                                                    </span></span></button></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="b3 mb--5">December 26, 2025</p>
                                        </th>
                                        <td>
                                            <p class="b3">4</p>
                                        </td>
                                        <td>
                                            <p class="b3">8</p>
                                        </td>
                                        <td>
                                            <p class="b3">4</p>
                                        </td>
                                        <td>
                                            <p class="b3">1</p>
                                        </td>
                                        <td>
                                            <p class="b3">0</p>
                                        </td>
                                        <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Fail</span>
                                        </td>
                                        <td><button class="rbt-btn btn-border rbt-sm-btn-2" type="button"><span
                                                    class="icon-reverse-wrapper"><span class="btn-text">Details
                                                    </span></span></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="rbt-dashboard-table table-responsive mobile-table-750 mt--50 quiz-result-enter quiz-result-enter-active">
                            <table class="rbt-table rbt-table-scroll table table-borderless">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Type</th>
                                        <th>Question</th>
                                        <th>Given Answer</th>
                                        <th>Correct Answer</th>
                                        <th>Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="b3 mb--5">1</p>
                                        </td>
                                        <td>
                                            <p class="b3">True/False</p>
                                        </td>
                                        <td>
                                            <p class="b3">What is the capital of France?</p>
                                        </td>
                                        <td>
                                            <p class="b3">True</p>
                                        </td>
                                        <td>
                                            <p class="b3">True</p>
                                        </td>
                                        <td><span
                                                class="rbt-badge-5 bg-color-success-opacity color-success">Correct</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="b3 mb--5">2</p>
                                        </td>
                                        <td>
                                            <p class="b3">Single Chice</p>
                                        </td>
                                        <td>
                                            <p class="b3">What are the key features of Next.js ?</p>
                                        </td>
                                        <td>
                                            <p class="b3">True</p>
                                        </td>
                                        <td>
                                            <p class="b3">False</p>
                                        </td>
                                        <td><span
                                                class="rbt-badge-5 bg-color-danger-opacity color-danger">Incorrect</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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