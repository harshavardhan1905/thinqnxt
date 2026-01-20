<?php 
require_once __DIR__ . "/api/country_data.php";
$countries = getAllCountries();
?>

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

                 <!-- Visible code -->
                <div class="code-display" id="codeDisplay">+91</div>
                 <!-- Arrow button -->
                <div class="select-arrow" id="selectArrow">
                    <svg width="25" height="25" viewBox="0 0 24 24">
                        <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
                

                <!-- Invisible select -->
                <select name="code" id="countrySelect" required>
                    <?php foreach ($countries as $con): ?>
                        <option
                            value="+<?= htmlspecialchars($con['phonecode']) ?>"
                            data-label="+<?= htmlspecialchars($con['phonecode']) ?> <?= htmlspecialchars($con['country_name']) ?>"
                        >
                            +<?= htmlspecialchars($con['phonecode']) ?> <?= htmlspecialchars($con['country_name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                

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
<script>
    const select = document.getElementById("countrySelect");
    const display = document.getElementById("codeDisplay");

    // Initial value
    display.textContent = select.value;

    select.addEventListener("change", function () {
        display.textContent = this.value;
    });

    // Clicking arrow opens select
// arrow.addEventListener("click", function () {
//     select.focus();
//     select.click();
// });

</script>


</body>

