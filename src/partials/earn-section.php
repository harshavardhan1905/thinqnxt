<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Earn While You Learn</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

<style>

/* ===============================
   BASE
================================ */

.earn-sec-container {
  max-width: 1200px;
  margin: auto;
  padding: 25px 0px;
}

.earn-sec-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
}

@media (max-width: 900px) {
  .earn-sec-grid {
    grid-template-columns: 1fr;
  }
}

/* ===============================
   LEFT CONTENT
================================ */
.earn-sec-badge {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 13px;
  font-weight: 700;
  text-transform: uppercase;
  color: #eecd2b;
  letter-spacing: 1px;
}

.earn-sec-badge span {
  width: 32px;
  height: 2px;
  background: #eecd2b;
}

.earn-sec-title {
  font-size: 42px;
  font-weight: 400;
  line-height: 1.1;
  margin: 20px 0;
}

.earn-sec-title strong {
  color: #eecd2b;
}

.earn-sec-desc {
  font-size: 18px;
  color: #5c5a4f;
  max-width: 520px;
}

.earn-sec-actions {
  display: flex;
  gap: 16px;
  margin-top: 30px;
}

.earn-sec-btn-primary {
  background: #eecd2b;
  color: #1b190d;
  padding: 16px 32px;
  font-weight: 500;
  border-radius: 10px;
  border: none;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 8px;
  transition: 0.3s;
}

.earn-sec-btn-primary:hover {
  background: #dabb25;
}

.earn-sec-btn-secondary {
  background: #fff;
  border: 1px solid #e7e3cf;
  padding: 16px 32px;
  border-radius: 10px;
  font-weight: 400;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 8px;
}

/* ===============================
   RIGHT TIMELINE
================================ */
.earn-sec-timeline {
  position: relative;
  padding-left: 50px;
}

.earn-sec-timeline-item {
  position: relative;
  margin-bottom: 10px;
}

.earn-sec-timeline-item::before {
  content: "";
  position: absolute;
  left: -23px;
  top: 60px;
  bottom: -40px;
  width: 2px;
  background: #e7e3cf;
}

.earn-sec-timeline-item:last-child::before {
  display: none;
}

/* ===============================
   CARD
================================ */
.earn-sec-card {
  background: #ffffff;
  border: 1px solid #e7e3cf;
  border-radius: 14px;
  padding: 14px;
  display: flex;
  gap: 16px;
  align-items: flex-start;
  transition: 0.3s;
}

.earn-sec-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.06);
  border-color: #eecd2b;
}

.earn-sec-icon {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: rgba(238,205,43,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #eecd2b;
  flex-shrink: 0;
  transition: 0.3s;
}

.earn-sec-card:hover .earn-sec-icon {
  background: #eecd2b;
  color: #1b190d;
}

.earn-sec-card h3 {
  margin: 0;
  font-size: 20px;
  font-weight: 400;
}

.earn-sec-card p {
  margin-top: 6px;
  font-size: 14px;
  color: #5c5a4f;
  line-height: 1.6;
}
</style>
</head>

<body>

<section class="earn-sec-container">
  <div class="earn-sec-grid">

    <!-- LEFT -->
    <div>
      <div class="earn-sec-badge">
        <span></span> Career Accelerator
      </div>

      <h1 class="earn-sec-title">
        Earn While You <strong>Learn</strong>
      </h1>

      <p class="earn-sec-desc">
        Bridge the gap between education and employment. Join our exclusive hire-train model designed to fast-track your career with real-world experience.
      </p>

      <div class="earn-sec-actions">
        <button class="earn-sec-btn-primary">
          Apply Now
          <span class="material-symbols-outlined">arrow_forward</span>
        </button>

        <button class="earn-sec-btn-secondary">
          How it works
          <span class="material-symbols-outlined">play_circle</span>
        </button>
      </div>
    </div>

    <!-- RIGHT -->
    <div class="earn-sec-timeline">

      <div class="earn-sec-timeline-item">
        <div class="earn-sec-card">
          <div class="earn-sec-icon">
            <span class="material-symbols-outlined">school</span>
          </div>
          <div>
            <h3>Paid Internship</h3>
            <p>Hands-on training on real-world commercial projects.</p>
          </div>
        </div>
      </div>

      <div class="earn-sec-timeline-item">
        <div class="earn-sec-card">
          <div class="earn-sec-icon">
            <span class="material-symbols-outlined">payments</span>
          </div>
          <div>
            <h3>Monthly Stipend</h3>
            <p>Consistent financial support while you upskill.</p>
          </div>
        </div>
      </div>

      <div class="earn-sec-timeline-item">
        <div class="earn-sec-card">
          <div class="earn-sec-icon">
            <span class="material-symbols-outlined">handshake</span>
          </div>
          <div>
            <h3>Client Exposure</h3>
            <p>Work directly with industry-leading partners.</p>
          </div>
        </div>
      </div>

      <div class="earn-sec-timeline-item">
        <div class="earn-sec-card">
          <div class="earn-sec-icon">
            <span class="material-symbols-outlined">rocket_launch</span>
          </div>
          <div>
            <h3>Career Growth</h3>
            <p>Secure a full-time role and unlock growth paths.</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

</body>
</html>
