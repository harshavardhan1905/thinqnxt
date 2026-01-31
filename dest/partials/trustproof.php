<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Trust Proof Bar</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
   .trust-proof {
    display: flex;
    justify-content: center;
    padding-top: 10px;
}

.trust-proof-card {
  background: #ffffff;
  border-radius: 999px;
  padding: 28px 36px;
  display: flex;
  align-items: center;
  gap: 28px;

  /* 👇 reserve border space */
  border: 1px solid transparent;

  box-shadow:
    0 5px 10px rgba(15, 23, 42, 0.08),
    inset 0 0 0 1px #e5e7eb;

  max-width: 1350px;
  width: 100%;
  transition: border-color 0.25s ease; /* smooth */
}

.trust-proof-card:hover {
  border-color: rgba(245, 197, 24, 0.55);
}

.b-title{
  position: relative;
  font-weight: 400;
}

/* Items */
.tp-item {
  display: flex;
  align-items: center;
  gap: 14px;
}

.tp-icon {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
}

.tp-icon.blue {
  background: #e0ebff;
  color: #1d4ed8;
}

.tp-icon.green {
  background: #e6f9f0;
  color: #059669;
}

.tp-icon.orange {
  background: #fff4e5;
  color: #d97706;
}

/* Text */
.tp-text strong {
  font-size: 20px;
  font-weight: 500;
  color: #0f172a;
}

.tp-text span {
  display: block;
  font-size: 11px;
  font-weight: 600;
  color: #64748b;
  letter-spacing: 0.08em;
  margin-top: 2px;
}

/* Divider */
.tp-divider {
  width: 1px;
  height: 44px;
  background: #e5e7eb;
}

/* Rating */
.tp-rating {
  text-align: left;
}

.stars {
  color: #fbbf24;
  font-size: 16px;
  letter-spacing: 2px;
}

.rating-text {
  font-size: 14px;
  color: #475569;
}

.rating-text strong {
  color: #0f172a;
  font-weight: 700;
}

/* Partners */
.tp-partners {
  text-align: left;
}

.tp-partners .label {
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.12em;
  color: #94a3b8;
}

.tp-partners .logos {
  display: flex;
  gap: 10px;
  margin-top: 6px;
}

.tp-partners .logo {
  width: 36px;
  height: 30px;
  background: #e5e7eb;
  border-radius: 3px;
}

/* Responsive */
@media (max-width: 1024px) {
  .trust-proof-card {
    flex-wrap: wrap;
    border-radius: 24px;
  }

  .tp-divider {
    display: none;
  }
}
.swiggy img{
  margin-top: -4px;
}
.zomato img{
  margin-top: -3px;
}

  </style>
</head>

<body>

<div class="trust-proof padding_bottom_100px">
  <div class="trust-proof-card">

    <!-- Item 1 -->
    <div class="tp-item">
      <div class="tp-icon blue">
        👥
      </div>
      <div class="tp-text">
        <strong class="b-title">39k+</strong>
        <span>LEARNERS<br>TRAINED</span>
      </div>
    </div>

    <!-- Divider -->
    <div class="tp-divider"></div>

    <!-- Item 2 -->
    <div class="tp-item">
      <div class="tp-icon green">
        📷
      </div>
      <div class="tp-text">
        <strong class="b-title">11+</strong>
        <span>YEARS<br>EXPERIENCE</span>
      </div>
    </div>

    <div class="tp-divider"></div>

    <!-- Item 3 -->
    <div class="tp-item">
      <div class="tp-icon orange">
        ✔
      </div>
      <div class="tp-text">
        <strong class="b-title">200+</strong>
        <span>PROJECTS<br>DELIVERED</span>
      </div>
    </div>

    <div class="tp-divider"></div>

    <!-- Rating -->
    <div class="tp-rating">
      <div class="stars">★★★★★</div>
      <div class="rating-text">
        <strong class="b-title">4.9/5</strong> from 10k+<br>reviews
      </div>
    </div>

    <div class="tp-divider"></div>

    <!-- Partners -->
    <div class="tp-partners">
      <span class="label">HIRING PARTNERS</span>
      <div class="logos">
          <div class="logo">
            <img src="../assets/images/companies/HSBC481241.png" alt="">
          </div>
          <div class="logo swiggy">
            <img src="../assets/images/companies/swiggy481241.png" alt="">
          </div>
          <div class="logo zomato">
            <img src="../assets/images/companies/zomato-text.png" alt="">
          </div>
          <div class="logo">
            <img src="../assets/images/companies/Infosys481241.png" alt="">
          </div>
          <div class="logo">
            <img src="../assets/images/companies/Razorpay481241.png" alt="">
          </div>
          <div class="logo">
            <img src="../assets/images/companies/ola-text.png" alt="">
          </div>
          <div class="logo">
            <img src="../assets/images/companies/Capgemini481241.png" alt="">
          </div>
          <div class="logo">
            <img src="../assets/images/companies/tcs481241.png" alt="">
          </div>
      </div>
    </div>

  </div>
</div>

</body>
</html>
