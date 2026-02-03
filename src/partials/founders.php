<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>thinqNxt – Founder Vision</title>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>


.vision-section {
  padding: 10px 20px 0;
  background: var(--bg-light);
}

.vision-container {
  max-width: 1200px;
  margin: 0 auto;
}

/* ===============================
   GRID LAYOUT
================================ */

.vision-grid {
  display: grid;
  grid-template-columns: 460px 1fr;
  gap: 80px;
  align-items: start;
}

@media (max-width: 1024px) {
  .vision-grid {
    grid-template-columns: 1fr;
    gap: 60px;
  }
}

/* ===============================
   LEFT STACK
================================ */

/* ===============================
   LEFT STACK (FIXED)
================================ */

/* ===============================
   LEFT STACK (FIXED)
================================ */

.vision-left {
  position: relative;
  min-height: 520px;
}

.founder-stack {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 28px;
}

/* PRIMARY CARD */
.founder-card.primary {
  width: 240px;
  z-index: 3;
}

/* SECONDARY CARD (OFFSET) */
.founder-card.secondary {
  width: 240px;
  position: absolute;
  right: -25px;
  bottom: -267px;
  opacity: 0.95;
  z-index: 2;
}
.secondary img{
  margin-left: 51px;
}
/* SHARED CARD STYLES */
.founder-card {
  border-radius: 14px;
  overflow: hidden;
  cursor: pointer;
  background: linear-gradient(
    180deg,
    rgba(238, 196, 43, 0.35),
    rgba(238, 196, 43, 0.08)
  );
  box-shadow: 0 18px 40px rgba(0,0,0,0.12);
}
.founder-card:hover{
  background: linear-gradient(
  135deg,
  #fde68a,   /* light cream */
  #facc15   /* soft yellow */
);;
}

.founder-card img {
  width: 100%;
  display: block;
  background: transparent;
}

/* EXPERIENCE CARD */
.experience-card {
  position: absolute;
  left: 0;
  bottom: -32px;
  width: 200px;
  padding: 18px 20px;
  /* background: #f4c430; */
  border-radius: 12px;
  box-shadow: 0 16px 36px rgba(238,196,43,0.45);
  font-weight: 700;
}


.experience-card span {
  display: block;
  font-size: 12px;
  font-weight: 600;
}

.experience-card strong {
  font-size: 26px;
  color: #000;
}

/* ===============================
   RIGHT CONTENT
================================ */

.vision-label {
  font-size: 11px;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: #f4c430;
  margin-bottom: 12px;
}

.vision-title {
  font-size: 44px;
  line-height: 1.15;
  font-weight: 400;
  margin-bottom: 24px;
}

.vision-title span {
  color: #f4c430;
}

.vision-text {
  font-size: 15px;
  line-height: 1.7;
  color: var(--text-muted);
  max-width: 520px;
  margin-bottom: 32px;
}

/* ===============================
   FEATURE CARDS
================================ */

.vision-features {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 24px;
  margin-bottom: 32px;
}

.feature-card {
  border: 1px solid var(--card-border);
  border-radius: 12px;
  padding: 20px;
  background: #fff;
}

.feature-title {
  font-weight: 700;
  color: #f4c430;
  margin-bottom: 6px;
}

.feature-subtitle {
  font-size: 13px;
  font-weight: 700;
  margin-bottom: 6px;
}

.feature-text {
  font-size: 13px;
  color: var(--text-muted);
  line-height: 1.6;
}

/* ===============================
   FOUNDERS ROW
================================ */

.founder-row {
  display: flex;
  gap: 40px;
  margin-top: 24px;
}

.founder-mini {
  text-align: center;
}

.founder-mini img {
  width: 42px;
  height: 42px;
  border-radius: 8px;
  object-fit: cover;
}

.founder-mini strong {
  display: block;
  font-size: 13px;
  margin-top: 6px;
}

.founder-mini span {
  font-size: 11px;
  color: var(--text-muted);
}

/* ===============================
   STATS BAR
================================ */

.stats-bar {
  margin-top: 100px;
  padding: 40px 20px;
  border-top: 1px solid #eee;
  background: #fff;
}

.stats-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  text-align: center;
}

.stat strong {
  font-size: 28px;
  font-weight: 800;
}

.stat span {
  display: block;
  font-size: 11px;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #f4c430;
  margin-top: 6px;
}
.founder-name{
  text-align: center;
}
.founder-role{
  text-align: center;
}
.founder-info{
  background: #fff;
  position: relative;
}
</style>
</head>

<body>

<section class="vision-section">
  <div class="vision-container">

    <div class="vision-grid">

      <!-- LEFT -->
      <div class="vision-left">
  
  <div class="founder-stack">
    <div class="founder-card primary"
    onclick="window.open('https://www.linkedin.com/in/kodali-utej/', '_blank')"
    >
      <img src="../assets/images/founder/Utej-kodali-removebg-preview.webp" alt="">
      <div class="founder-info">
        <div class="founder-name">Utej Kodali</div>
        <div class="founder-role">Founder</div>
      </div>
    </div>

    <div class="founder-card secondary"
    onclick="window.open('https://www.linkedin.com/in/revanth-kodali/', '_blank')"
    >
      <img src="../assets/images/founder/revanth-kodali-removebg-preview.png" alt="">
      <div class="founder-info">
        <div class="founder-name">Revanth Kodali</div>
        <div class="founder-role">Co-Founder</div>
      </div>
    </div>
  </div>

  <div class="experience-card">
    <span>Combined Experience</span>
    <strong>11+ Years</strong>
    <span>Global Tech Leadership</span>
  </div>

</div>


      <!-- RIGHT -->
      <div>
        <div class="vision-label">Founder’s Message</div>
        <h2 class="vision-title">
          Our Vision for the <br/>
          <span>Next Generation</span>
        </h2>

        <p class="vision-text">
          At thinqNxt, we believe that education shouldn’t just be about acquiring
          knowledge—it should be about mastering the future. Our mission is to bridge
          the gap between academic theory and real-world data science.
        </p>

        <div class="vision-features">
          <div class="feature-card">
            <div class="feature-title">Professionals</div>
            <div class="feature-subtitle">Why thinqNxt Exists</div>
            <div class="feature-text">
              Transforming aspirational learners into industry-ready data professionals
              through practical, hands-on frameworks.
            </div>
          </div>

          <div class="feature-card">
            <div class="feature-title">Graduates</div>
            <div class="feature-subtitle">Student Success</div>
            <div class="feature-text">
              We go beyond certification by building real careers through mentorship,
              projects, and industry alignment.
            </div>
          </div>
        </div>

        <!-- <div class="founder-row">
          <div class="founder-mini">
            <img src="../assets/images/founder/Utej-kodali.png">
            <strong>Utej Kodali</strong>
            <span>Founder</span>
          </div>
          <div class="founder-mini">
            <img src="../assets/images/founder/revanth-kodali.png">
            <strong>Revanth Kodali</strong>
            <span>Co-Founder</span>
          </div>
        </div> -->

      </div>
    </div>
  </div>
</section>

<!-- <section class="stats-bar">
  <div class="stats-grid">
    <div class="stat">
      <strong>500+</strong>
      <span>Graduates Placed</span>
    </div>
    <div class="stat">
      <strong>50+</strong>
      <span>Partner Companies</span>
    </div>
    <div class="stat">
      <strong>12k+</strong>
      <span>Learning Hours</span>
    </div>
    <div class="stat">
      <strong>98%</strong>
      <span>Success Rate</span>
    </div>
  </div>
</section> -->

</body>
</html>
