<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Book Live Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

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

            <form method="POST">

                <input type="text" name="name" placeholder="Enter Full Name" required>

                <input type="email" name="email" placeholder="Enter Your Email" required>

                <div class="phone-field">
                    <span>+91</span>
                    <input type="tel" name="phone" placeholder="Mobile Number" required>
                </div>

                <select name="course" required>
                    <option value="" disabled selected>Select Course</option>
                    <option>Full Stack Data Science</option>
                    <option>Data Science</option>
                    <option>Data Engineering</option>
                    <option>Data Analyst</option>
                    <option>AI / ML</option>
                    <option>Gen AI</option>
                </select>

                <label class="checkbox">
                    <input type="checkbox" required>
                    <span>
                        By continuing, you agree to our
                        <a href="#">Terms</a> and
                        <a href="#">Privacy Policy</a>
                    </span>
                </label>

                <button type="submit" class="book-btn">
                    Book your Demo Session
                </button>

            </form>
        </div>

    </section>

</div>

</body>
</html>
