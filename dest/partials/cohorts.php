
<style>
/* ===============================
   LAYOUT
================================ */
.get-placed-grid {
  transform: translate3d(0,0,0);
}

/*.cohort-section { padding: 40px 0; } */
.cohort-container { max-width: 1200px; margin: auto; }

/* ===============================
   GRID
================================ */
.cohort-grid {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 24px;
}
@media (max-width: 900px) {
  .cohort-grid { grid-template-columns: 1fr; }
}

/* ===============================
   CARDS
================================ */
.cohort-glass,
.cohort-glass-mini {
  position: relative;
  background:
    linear-gradient(to top, rgba(253,224,71,.18), rgba(253,224,71,.08), transparent),
    #fff;
  border-radius: 32px;
  padding: 32px;
  border: 1px solid;
  overflow: hidden;
}

.cohort-glass:hover,
.cohort-glass-mini:hover {
  border-color: rgba(245,197,24,.55);
}

/* ===============================
   CSS SHAPES
================================ */
.cohort-glass::before,
.cohort-glass-mini::before {
  content:"";
  position:absolute;
  width:240px;height:240px;
  top:-90px;right:-90px;
  background:radial-gradient(circle,
    rgba(245,158,11,.22),
    rgba(245,158,11,.08),
    transparent 70%);
  border-radius:50%;
}

.cohort-glass::after {
  content:"";
  position:absolute;
  inset:0;
  background:linear-gradient(135deg,
    transparent 68%,
    rgba(245,158,11,.1),
    transparent 82%);
}

.cohort-glass-mini::after {
  content:"";
  position:absolute;
  bottom:-60px;left:-60px;
  width:160px;height:160px;
  border-radius:50%;
  border:2px dashed rgba(245,158,11,.25);
}

.cohort-dots {
  position:absolute;
  inset:0;
  background-image:radial-gradient(rgba(245,158,11,.15) 1px, transparent 1px);
  background-size:18px 18px;
  opacity:.2;
}

.cohort-glass > *,
.cohort-glass-mini > * {
  position:relative;
  z-index:1;
}

/* ===============================
   BADGES
================================ */
.cohort-badges {
  display:flex;gap:12px;align-items:center;margin-bottom:20px;
}
.cohort-badge {
  font-size:11px;font-weight:700;
  padding:6px 14px;border-radius:999px;text-transform:uppercase;
}
.cohort-badge.primary {
  background:rgba(245,158,11,.15);color:#f59e0b;
}
.cohort-badge.active {
  background:rgba(16,185,129,.15);color:#10b981;
  display:flex;gap:6px;align-items:center;
}
.cohort-alert { color:#ef4444;font-weight:700;font-size:12px; }

/* ===============================
   MAIN CONTENT
================================ */
.cohort-title { font-size:34px;font-weight:500;margin-bottom:12px; }
.cohort-title span { display:block;font-weight:400;color:#64748b; font-size:30px; }
.cohort-description {
  font-size:16px;line-height:1.6;color:#334155;
  max-width:520px;margin-bottom:28px;
}

/* ===============================
   META
================================ */
.cohort-meta {
  display:grid;grid-template-columns:repeat(2,1fr);
  gap:20px;margin-bottom:28px;
}
.cohort-meta-item { display:flex;gap:12px;align-items:center; }
.cohort-meta-icon {
  width:36px;height:36px;border-radius:12px;
  background:rgba(245,158,11,.15);
  display:flex;align-items:center;justify-content:center;
  color:#f59e0b;
}

/* ===============================
   FOOTER
================================ */
.cohort-footer {
  border:1px solid rgba(245,197,24,.55);
  border-radius:24px;padding:20px;
  display:flex;justify-content:space-between;
  gap:20px;flex-wrap:wrap;align-items:center;
}
.cohort-timer { display:flex;gap:14px; }
.cohort-time strong { font-size:22px; }
.cohort-time span {
  display:block;font-size:10px;
  text-transform:uppercase;color:#64748b;
}

/* ===============================
   BUTTON
================================ */
.cohort-btn {
  background:#f59e0b;color:#fff;
  padding:14px 26px;border-radius:14px;
  font-weight:700;border:none;cursor:pointer;
  display:flex;gap:8px;align-items:center;
  transition:.3s;
}
.cohort-btn:hover { background:#d97706;transform:translateY(-2px); }

/* ===============================
   SIDE CARDS
================================ */
.cohort-side { display:flex;flex-direction:column;gap:24px; }

/* INTEGRATED HEADER (CLEAN & MERGED) */
.cohort-card-head {
  margin: -32px -32px 16px -32px;
  padding: 16px 28px;
  background:transparent;
  color:#f5c518;
  font-size:17px;
  font-weight:700;
  border-bottom:1px solid rgba(255,255,255,.12);
  border-radius:32px 32px 0 0;
}

/* SIDE CARD CONTENT */
.cohort-side-desc {
  font-size:13.5px;
  line-height:1.6;
  color:#64748b;
  margin-bottom:14px;
}
.cohort-side-info {
  display:flex;gap:12px;align-items:center;
  font-size:14px;font-weight:500;margin-bottom:12px;
}
.cohort-side-info-icon {
  width:34px;height:34px;border-radius:10px;
  background:rgba(245,158,11,.15);
  display:flex;align-items:center;justify-content:center;
  color:#f59e0b;
}
.cohort-side-btn {
  width:100%;
  padding:12px;
  border-radius:0 0 24px 24px;
  border:1px solid rgba(245,197,24,.55);
  background:transparent;
  font-weight:600;
  cursor:pointer;
  transition:.25s;
}
.js-carousel{
  height: 20vh;
  -webkit-mask-image: linear-gradient( to right, transparent 0%, black 6%, black 94%, transparent 100% );
}
.cohort-side-btn:hover { background:#f59e0b;color:#fff; }
.get-placed-card.compact {
  min-width: 200px;
  padding: 14px 16px;
  border-radius: 16px;
  display: flex;
  align-items: center;
  gap: 14px;
  flex-direction:unset !important;

  background: linear-gradient(
    to right,
    rgba(253,224,71,0.18),
    rgba(253,224,71,0.08),
    #fff
  );

  border: 1px solid rgba(245,197,24,0.4);
  box-shadow: 0 8px 22px rgba(245,158,11,0.18);
  transition: transform .3s ease, box-shadow .3s ease;
}

.get-placed-card.compact:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 32px rgba(245,158,11,0.28);
}

/* Avatar */
.get-placed-card.compact .placed-avatar {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  border: 2px solid rgba(245,158,11,.45);
  flex-shrink: 0;
}

/* Text */
.placed-info {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.placed-name {
  font-size: 14px;
  font-weight: 700;
  line-height: 1.2;
}

.placed-course {
  font-size: 12px;
  color: #64748b;
  font-weight: 500;
}

/* Company */
.placed-company {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 12px;
  color: #334155;
}

.placed-company img {
  width: 22px;
  height: 22px;
  border-radius: 6px;
  background: #fff;
  padding: 3px;
  border: 1px solid rgba(245,158,11,.25);
}
.cohort-tag-label{
  position: absolute;
  right: -60px;
  top: 51px;
  width: 200px;
  height: 20px;
  background-color: rgba(245,158,11,.25);
  rotate: 45deg;
}
</style>


<body>
<section class="cohort-section">
  <div class="cohort-container">
    <div class="cohort-grid">
      <!-- MAIN CARD -->
      <div class="cohort-glass">
    <span class="cohort-tag-label"></span>

        <div class="cohort-badges">
          <span class="cohort-badge primary">Flagship Program</span>
          <span class="cohort-badge active">
            <span style="width:8px;height:8px;border-radius:50%;background:#10b981"></span>
            Enrollment Active
          </span>
          <span class="cohort-alert">• LIMITED SEATS LEFT!</span>
        </div>

        <h2 class="cohort-title">
          Full Stack Data Science Course
          <span>Master's Track 2026</span>
        </h2>

        <p class="cohort-description">
          Join an elite group of learners and master full-stack data science with real-world projects and expert mentorship.
        </p>

        <div class="cohort-meta">
          <div class="cohort-meta-item">
            <div class="cohort-meta-icon"><i data-lucide="calendar"></i></div>
            <div><small>Starts On</small><br><strong>Mar 01, 2026</strong></div>
          </div>
          <div class="cohort-meta-item">
            <div class="cohort-meta-icon"><i data-lucide="timer"></i></div>
            <div><small>Duration</small><br><strong>24 Weeks</strong></div>
          </div>
        </div>
  <div class=" js-carousel">
    <div class="get-placed-grid js-carousel-track">
       <div class="get-placed-card compact">
          <img
            src="https://i.pravatar.cc/80?img=12"
            alt="Learner"
            class="placed-avatar"
          />

          <div class="placed-info">
            <strong class="placed-name">Rahul Sharma</strong>
            <span class="placed-course">Full Stack Data Science</span>

            <div class="placed-company">
              <img
                src="../assets/images/companies/tcs.png"
                alt="Company"
              />
              <span>Placed at <b>TCS</b></span>
            </div>
          </div>
        </div>
       <div class="get-placed-card compact">
          <img
            src="https://i.pravatar.cc/80?img=12"
            alt="Learner"
            class="placed-avatar"
          />

          <div class="placed-info">
            <strong class="placed-name">Rahul Sharma</strong>
            <span class="placed-course">Full Stack Data Science</span>

            <div class="placed-company">
              <img
                src="../assets/images/companies/tcs.png""
                alt="Company"
              />
              <span>Placed at <b>TCS</b></span>
            </div>
          </div>
        </div>
       <div class="get-placed-card compact">
          <img
            src="https://i.pravatar.cc/80?img=12"
            alt="Learner"
            class="placed-avatar"
          />

          <div class="placed-info">
            <strong class="placed-name">Rahul Sharma</strong>
            <span class="placed-course">Full Stack Data Science</span>

            <div class="placed-company">
              <img
                src="../assets/images/companies/tcs.png""
                alt="Company"
              />
              <span>Placed at <b>TCS</b></span>
            </div>
          </div>
        </div>
       <div class="get-placed-card compact">
          <img
            src="https://i.pravatar.cc/80?img=12"
            alt="Learner"
            class="placed-avatar"
          />

          <div class="placed-info">
            <strong class="placed-name">Rahul Sharma</strong>
            <span class="placed-course">Full Stack Data Science</span>

            <div class="placed-company">
              <img
                src="../assets/images/companies/tcs.png""
                alt="Company"
              />
              <span>Placed at <b>TCS</b></span>
            </div>
          </div>
        </div>

       

        
    </div>
</div>


        <div class="cohort-footer">
          <div class="cohort-timer">
            <div class="cohort-time"><strong>04</strong><span>Days</span></div>
            <div class="cohort-time"><strong>12</strong><span>Hrs</span></div>
            <div class="cohort-time"><strong>45</strong><span>Mins</span></div>
          </div>
          <button class="cohort-btn">Apply Now</button>
        </div>
      </div>

      <!-- SIDE CARDS -->
      <div class="cohort-side">

        <div class="cohort-glass-mini">
          <span class="cohort-dots"></span>
          <div class="cohort-card-head">Demo</div>
          <p class="cohort-side-desc">
            Join a live instructor-led demo and experience our hands-on teaching approach.
          </p>
          <div class="cohort-side-info">
            <div class="cohort-side-info-icon"><i data-lucide="calendar"></i></div>
            15th February 2026, Sunday
          </div>
          <div class="cohort-side-info">
            <div class="cohort-side-info-icon"><i data-lucide="clock"></i></div>
            11:00 AM – 12:30 PM IST
          </div>
          <button class="cohort-side-btn">Enroll Now</button>
        </div>

        <div class="cohort-glass-mini">
          <span class="cohort-dots"></span>
          <div class="cohort-card-head">Webinar</div>
          <p class="cohort-side-desc">
            Learn proven career transition strategies from experienced industry professionals.
          </p>
          <div class="cohort-side-info">
            <div class="cohort-side-info-icon"><i data-lucide="calendar"></i></div>
            22nd February 2025, Sunday
          </div>
          <div class="cohort-side-info">
            <div class="cohort-side-info-icon"><i data-lucide="clock"></i></div>
            11:00 AM – 12:30 PM IST
          </div>
          <button class="cohort-side-btn">Enroll Now</button>
        </div>

      </div>

    </div>
  </div>
</section>



<script>
 document.querySelectorAll('.js-carousel').forEach(carousel => {
  const track = carousel.querySelector('.js-carousel-track');

  let offset = 0;
  const speed = 0.6;
  let isPaused = false;

  function animate() {
    if (!isPaused) {
      offset -= speed;
      track.style.transform = `translateX(${offset}px)`;

      const firstCard = track.firstElementChild;
      const gap = parseFloat(getComputedStyle(track).gap || 0);
      const cardWidth = firstCard.offsetWidth + gap;

      if (-offset >= cardWidth) {
        offset += cardWidth;
        track.appendChild(firstCard);
        track.style.transform = `translateX(${offset}px)`;
      }
    }
    requestAnimationFrame(animate);
  }

  carousel.addEventListener('mouseenter', () => isPaused = true);
  carousel.addEventListener('mouseleave', () => isPaused = false);

  animate();
});

</script>
</body>

