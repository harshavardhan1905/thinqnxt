<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>ThinqNXT Certification</title>

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<style>
/* ===============================
   RESET & BASE
================================ */

/* ===============================
   BACKGROUND EFFECTS
================================ */
.certificate-bg {
  position: absolute;
  inset: 0;
  z-index: 0;
  pointer-events: none;
}

.certificate-blob {
  position: absolute;
  border-radius: 50%;
  filter: blur(120px);
  opacity: 0.35;
}

.certificate-blob.yellow {
  width: 600px;
  height: 600px;
  background: #f59e0b;
  top: -20%;
  right: -10%;
  opacity: 0.1;
}

.certificate-blob.blue {
  width: 500px;
  height: 500px;
  background: #2563eb;
  bottom: -20%;
  left: -10%;
  opacity: 0.1;
}

/* ===============================
   LAYOUT
================================ */
.certificate-section {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  padding: 0px 24px;
}

.certificate-wrapper {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
  position: relative;
  z-index: 1;
}

@media (max-width: 900px) {
  .certificate-wrapper {
    grid-template-columns: 1fr;
    gap: 60px;
  }
}

/* ===============================
   CERTIFICATE CARD
================================ */
.certificate-preview {
  display: flex;
  justify-content: center;
  position: relative;
}

.certificate-card {
  width: 96%;
  max-width: 410px;
  background: #ffffff;
  padding: 16px;
  border-radius: 18px;
  box-shadow: 0 30px 80px rgba(0,0,0,0.35);
  transform-style: preserve-3d;
  transition: transform 0.5s ease;
}

.certificate-card:hover {
  transform: rotateY(-6deg) rotateX(6deg) scale(1.03);
}

.certificate-card img {
  width: 100%;
  border-radius: 12px;
  height: 70vh;
}

/* Badge */
.certificate-badge {
  position: absolute;
  bottom: -24px;
  left: -24px;
  background: #ffffff;
  padding: 16px 20px;
  border-radius: 16px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.25);
  display: flex;
  gap: 14px;
  align-items: center;
}

.certificate-badge-icon {
  background: rgba(245,158,11,0.2);
  padding: 12px;
  border-radius: 12px;
  color: #f59e0b;
}

.certificate-badge-title {
  font-size: 12px;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: #64748b;
}

.certificate-badge-text {
  font-size: 18px;
  font-weight: 800;
}

/* ===============================
   CONTENT
================================ */
.certificate-content span.certificate-pill {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(245,158,11,0.15);
  color: #f59e0b;
  padding: 6px 14px;
  border-radius: 999px;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 20px;
}

.certificate-title {
  font-size: 40px;
  font-weight: 600;
  line-height: 1.1;
  margin-bottom: 20px;
}

.certificate-title span {
  color: #f59e0b;
}

.certificate-description {
  font-size: 18px;
  color: #475569;
  max-width: 520px;
  margin-bottom: 36px;
}

/* ===============================
   FEATURES
================================ */
.certificate-features {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 16px 28px;
  margin-bottom: 40px;
}

.certificate-feature {
  display: flex;
  align-items: center;
  gap: 10px;
  font-weight: 500;
  color: #1e293b;
}

.certificate-feature i {
  color: #f59e0b;
}

/* ===============================
   ACTIONS
================================ */
.certificate-actions {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}

.certificate-btn-primary {
  background: #f59e0b;
  color: #ffffff;
  padding: 16px 32px;
  border-radius: 14px;
  font-weight: 700;
  text-decoration: none;
  box-shadow: 0 0 30px rgba(245,158,11,0.45);
  transition: all 0.3s ease;
}

.certificate-btn-primary:hover {
  background: #d97706;
  transform: translateY(-2px);
  color: #fff;
}

.certificate-btn-secondary {
  border: 1px solid #cbd5f5;
  padding: 16px 28px;
  border-radius: 14px;
  text-decoration: none;
  font-weight: 600;
  color: #1e293b;
  display: flex;
  align-items: center;
  gap: 8px;
}

/* ===============================
   SOCIAL PROOF
================================ */
.certificate-social {
  margin-top: 32px;
  display: flex;
  align-items: center;
  gap: 14px;
}

.certificate-avatars img {
  width: 34px;
  height: 34px;
  border-radius: 50%;
  border: 2px solid #ffffff;
  margin-left: -10px;
}

.certificate-social-text {
  font-size: 14px;
  color: #64748b;
}
</style>
</head>

<body>

<section class="certificate-section">
  <div class="certificate-bg">
    <div class="certificate-blob yellow"></div>
    <div class="certificate-blob blue"></div>
  </div>

  <div class="certificate-wrapper">

    <!-- CERTIFICATE PREVIEW -->
    <div class="certificate-preview">
      <div class="certificate-card">
        <img src="../assets/images/course/thinqnxt-certificate.png" alt="Certificate">
      </div>

      <div class="certificate-badge">
        <div class="certificate-badge-icon">
          <i class="material-icons-round">verified</i>
        </div>
        <div>
          <div class="certificate-badge-title">Officially Recognized</div>
          <div class="certificate-badge-text">Industry Standard</div>
        </div>
      </div>
    </div>

    <!-- CONTENT -->
    <div class="certificate-content">
      <span class="certificate-pill">
        <i class="material-icons-round">workspace_premium</i>
        Premium Certification
      </span>

      <h1 class="certificate-title">
        Get Certified with <span>ThinqNXT</span>
      </h1>

      <p class="certificate-description">
        Elevate your career with our industry-recognized certification. Validate your skills in Data Science and Cloud Analytics.
      </p>

      <div class="certificate-features">
        <div class="certificate-feature"><i class="material-icons-round">check_circle</i> Valid across major MNCs</div>
        <div class="certificate-feature"><i class="material-icons-round">check_circle</i> Shareable on LinkedIn</div>
        <div class="certificate-feature"><i class="material-icons-round">check_circle</i> Unique Verification ID</div>
        <div class="certificate-feature"><i class="material-icons-round">check_circle</i> Lifetime Validity</div>
        <div class="certificate-feature"><i class="material-icons-round">check_circle</i> Hard copy delivered</div>
        <div class="certificate-feature"><i class="material-icons-round">check_circle</i> Letter of Recommendation</div>
      </div>

      <div class="certificate-actions">
        <a href="#" class="certificate-btn-primary">Apply for Certification</a>
        <a href="#" class="certificate-btn-secondary">
          <i class="material-icons-round">download</i>
          Download Brochure
        </a>
      </div>

      <div class="certificate-social">
        <div class="certificate-avatars">
          <img src="https://i.pravatar.cc/100?img=12">
          <img src="https://i.pravatar.cc/100?img=32">
          <img src="https://i.pravatar.cc/100?img=45">
        </div>
        <div class="certificate-social-text">
          Join <strong>10,000+</strong> certified graduates
        </div>
      </div>
    </div>

  </div>
</section>

</body>
</html>
