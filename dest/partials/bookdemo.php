<body>

<div class="full-width-wrapper">

    <section class="demo-section">

        <!-- Partner Header -->
        <div class="partner-bar">
            <p>In Partnership with</p>
            <div class="partners">
                <img src="logo1.png" alt="Partner 1">
                <img src="logo2.png" alt="Partner 2">
                <img src="logo3.png" alt="Partner 3">
                <!-- <img src="logo4.png" alt="Partner 4"> -->
            </div>
        </div>

        <!-- Form Card -->
        <div class="demo-card">
            <h2>Book a Live Demo Session</h2>
            <p class="subtitle">Register to attend the free Live Session</p>

            <form id="demoForm">

                <input type="text" name="name" placeholder="Enter Full Name" required>

                <input type="email" name="email" placeholder="Enter Your Email" required>

                <div class="phone-field">
                    <span>+91</span>
                    <input type="tel" name="phone" placeholder="Mobile Number" required>
                </div>

                <select name="course" required class='select-course'>
                    <option value="" disabled >Select Course</option>
                    <option selected class="course-select-visible">Full Stack Data Science</option>
                    <option class="course-select-visible">Data Science</option>
                    <option disabled>Data Engineering</option>
                    <option disabled>Data Analyst</option>
                    <option disabled>AI / ML</option>
                    <option disabled>Gen AI</option>
                </select>

                  <label class="checkbox">
                    <input type="checkbox" required>
                    <span>
                        By continuing, you agree to our
                        <a href="#">Terms</a> and
                        <a href="#">Privacy Policy</a>
                    </span>
                </label>

            
                <button type="submit" class="book-btn" id="submitBtn">
                    <p id="responseMsg" class="btn-message"></p>
                    <p id="btnText">Book your Demo Session</p>
                </button>

            </form>
        </div>

    </section>

</div>
<script src="assets/js/api/demo-api.js"></script>

</body>

