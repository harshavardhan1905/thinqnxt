<style>


/* ===============================
   SECTION
================================ */
.get-placed-section {
  /*padding: 60px 0px; */
}

/* ===============================
   STATS
================================ */
.get-placed-stats {
  max-width: 900px;
  margin: 0 auto 50px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
}

.get-placed-stat {
  background: rgba(255,255,255,0.75);
  border: 1px solid;
  border-radius: 14px;
  padding: 18px;
  text-align: center;
}
.get-placed-stat:hover{
  background: linear-gradient( 135deg, #fde68a24, #facc150a );

}


.get-placed-stat strong {
  font-size: 24px;
  color: #0f172a;
  font-weight: 700;
}

.get-placed-stat span {
  display: block;
  font-size: 13px;
  color: var(--gp-muted);
  margin-top: 4px;
}

/* ===============================
   GRID
================================ */
.get-placed-viewport {
  position: relative;
  overflow-x: auto;     /* ✅ allow horizontal scroll */
  overflow-y: hidden;
  overflow-x: auto;     /* ✅ allow horizontal scroll */
  overflow-y: hidden;
  height: 250px;

  /* Edge fade */
  mask-image: linear-gradient(
    to right,
    transparent 0%,
    black 6%,
    black 94%,
    transparent 100%
  );

  -webkit-mask-image: linear-gradient(
    to right,
    transparent 0%,
    black 6%,
    black 94%,
    transparent 100%
  );
}
.get-placed-viewport::-webkit-scrollbar {
  display: none;               /* Chrome / Safari */
}


/* .get-placed-grid {
  max-width: 1280px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  padding: 10px 0px ;
} */

  .get-placed-grid {
  display: flex;              /* ✅ NOT grid */
  flex-wrap: nowrap;          /* ✅ force single row */
  gap: 24px;
  width: max-content;         /* ✅ grow based on cards */
  padding: 10px 0;
  transform: translate3d(0,0,0);
}


/* ===============================
   CARD
================================ */
.get-placed-card {
  background: #ffffff;
  border: 1px solid ;
  border-radius: 16px;
  padding: 24px;
  display: flex;
  flex: 0 0 360px;   /* fixed width card */
  flex-direction: column;
  gap: 16px;
  transition:
    transform 0.25s ease,
    box-shadow 0.25s ease;
  will-change: transform;
}

.get-placed-card:hover {
    transform: scale(1.05);
    border-color: rgba(245, 197, 24, 0.55);
    box-shadow: 0 20px 40px -15px rgba(242,204,13,0.25);
    z-index: 3;
}

/* ===============================
   CARD HEADER
================================ */
.get-placed-card-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}

.get-placed-logo {
  width: 48px;
  height: 48px;
  background: #f8f8f5;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.get-placed-logo img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

/* BADGES */
.get-placed-badge {
  font-size: 11px;
  font-weight: 700;
  padding: 4px 8px;
  border-radius: 6px;
}

.get-placed-badge.gold {
  background: rgba(242,204,13,.15);
  color: #8a7a2e;
}

.get-placed-badge.green {
  background: #dcfce7;
  color: #166534;
}

.get-placed-badge.red {
  background: #fee2e2;
  color: #991b1b;
}

/* ===============================
   CARD BODY
================================ */
.get-placed-company {
  font-size: 18px;
  font-weight: 700;
  color: #0f172a;
}

.get-placed-role {
  font-size: 14px;
  color: var(--gp-muted);
  margin-top: 4px;
}

/* ===============================
   FOOTER
================================ */
.get-placed-footer {
  margin-top: auto;
  padding-top: 16px;
  border-top: 1px solid var(--gp-border);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.get-placed-avatars {
  display: flex;
}

.get-placed-avatars img {
  width: 26px;
  height: 26px;
  border-radius: 50%;
  border: 2px solid #fff;
  margin-left: -8px;
}
.placed-count {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  border: 2px solid #fff;
  margin-left: -8px;
  background-color: grey;
  color: #fff;
  padding: 2px;
  font-size: 15px;
}


.get-placed-avatars img:first-child {
  margin-left: 0;
}

.get-placed-count {
  font-size: 14px;
  font-weight: 700;
  color: #f5c518;
}

/* ===============================
   CTA
================================ */
.get-placed-cta {
  margin-top: 64px;
  text-align: center;
}

.get-placed-btn {
  background: transparent;
  /* color: #fff; */
  padding: 14px 28px;
  border-radius: 12px;
  font-weight: 700;
  border: 1px solid grey;
  cursor: pointer;
  transition: all .25s ease;
}

.get-placed-btn:hover {
  background-color: rgb(253, 255, 186);
  color: #0f172a;
  transform: translateY(-2px);
}

.get-placed-note {
  margin-top: 12px;
  font-size: 13px;
  color: #94a3b8;
}

/* ===============================
   RESPONSIVE
================================ */
@media (max-width: 1024px) {
  .get-placed-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .get-placed-stats {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 640px) {
  .get-placed-grid {
    grid-template-columns: 1fr;
  }
}
</style>


<body>

<section class="get-placed-section">

  <!-- STATS -->
  <div class="get-placed-stats">
    <div class="get-placed-stat"><strong>500+</strong><span>Hiring Partners</span></div>
    <div class="get-placed-stat"><strong>12k+</strong><span>Total Placements</span></div>
    <div class="get-placed-stat"><strong>140%</strong><span>Avg. Hike</span></div>
    <div class="get-placed-stat"><strong>₹42 LPA</strong><span>Highest Package</span></div>
  </div>

  <!-- GRID -->
  <div class="get-placed-viewport">
    <div class="get-placed-grid" id="get-placed-grid">

    <!-- GOOGLE -->
      <div class="get-placed-card">
        <div class="get-placed-card-header">
          <div class="get-placed-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"></div>
          <span class="get-placed-badge gold">Top Tier</span>
        </div>
        <div>
          <div class="get-placed-company">Google</div>
          <div class="get-placed-role">Software Engineer, Product Manager</div>
        </div>
        <div class="get-placed-footer">
          <div class="get-placed-avatars">
            <img src="https://i.pravatar.cc/40?img=1">
            <img src="https://i.pravatar.cc/40?img=2">
            <img src="https://i.pravatar.cc/40?img=3">
            <span class="placed-count">10+ </span>
          </div>
          <div class="get-placed-count">240+ Alumni</div>
        </div>
      </div>
    <!-- GOOGLE -->
      <div class="get-placed-card">
        <div class="get-placed-card-header">
          <div class="get-placed-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"></div>
          <span class="get-placed-badge gold">Top Tier</span>
        </div>
        <div>
          <div class="get-placed-company">Google</div>
          <div class="get-placed-role">Software Engineer, Product Manager</div>
        </div>
        <div class="get-placed-footer">
          <div class="get-placed-avatars">
            <img src="https://i.pravatar.cc/40?img=1">
            <img src="https://i.pravatar.cc/40?img=2">
            <img src="https://i.pravatar.cc/40?img=3">
            <span class="placed-count">10+ </span>
          </div>
          <div class="get-placed-count">240+ Alumni</div>
        </div>
      </div>

      <!-- AMAZON -->
      <div class="get-placed-card">
        <div class="get-placed-card-header">
          <div class="get-placed-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"></div>
          <span class="get-placed-badge green">Hiring Now</span>
        </div>
        <div>
          <div class="get-placed-company">Amazon</div>
          <div class="get-placed-role">SDE I, SDE II, Data Scientist</div>
        </div>
        <div class="get-placed-footer">
          <div class="get-placed-avatars">
            <img src="https://i.pravatar.cc/40?img=4">
            <img src="https://i.pravatar.cc/40?img=5">
            <span class="placed-count">10+ </span>
          </div>
          <div class="get-placed-count">180+ Alumni</div>
        </div>
      </div>

      <!-- MICROSOFT -->
      <div class="get-placed-card">
        <div class="get-placed-card-header">
          <div class="get-placed-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg"></div>
        </div>
        <div>
          <div class="get-placed-company">Microsoft</div>
          <div class="get-placed-role">Full Stack Developer, Azure Specialist</div>
        </div>
        <div class="get-placed-footer">
          <div class="get-placed-avatars">
            <img src="https://i.pravatar.cc/40?img=6">
            <img src="https://i.pravatar.cc/40?img=7">
             <span class="placed-count">10+ </span>
          </div>
          <div class="get-placed-count">150+ Alumni</div>
        </div>
      </div>
      <!-- MICROSOFT -->
      <div class="get-placed-card">
        <div class="get-placed-card-header">
          <div class="get-placed-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg"></div>
        </div>
        <div>
          <div class="get-placed-company">Microsoft</div>
          <div class="get-placed-role">Full Stack Developer, Azure Specialist</div>
        </div>
        <div class="get-placed-footer">
          <div class="get-placed-avatars">
            <img src="https://i.pravatar.cc/40?img=6">
            <img src="https://i.pravatar.cc/40?img=7">
             <span class="placed-count">10+ </span>
          </div>
          <div class="get-placed-count">150+ Alumni</div>
        </div>
      </div>
      

    </div>
  </div>

  <!-- CTA -->
  <div class="get-placed-cta">
    <button class="get-placed-btn">Download 2025 Placement Report →</button>
    <div class="get-placed-note">See the full list of 500+ hiring partners</div>
  </div>

</section>
<script>
  const CompTrack = document.getElementById('get-placed-grid');

  let offset = 0;
  const speed = 0.6;
  let isPaused = false;

  function animateRightToLeft() {
    if (!isPaused) {
      offset -= speed;
      CompTrack.style.transform = `translateX(${offset}px)`;

      const firstCard = CompTrack.firstElementChild;
      const gap = parseFloat(getComputedStyle(CompTrack).gap || 0);
      const cardWidth = firstCard.offsetWidth + gap;

      // move first card to end when fully hidden
      if (-offset >= cardWidth) {
        offset += cardWidth;
        CompTrack.appendChild(firstCard);
        CompTrack.style.transform = `translateX(${offset}px)`;
      }
    }

    requestAnimationFrame(animateRightToLeft);
  }

  // pause on hover
  CompTrack.addEventListener('mouseenter', () => {
    isPaused = true;
  });

  // resume on leave
  CompTrack.addEventListener('mouseleave', () => {
    isPaused = false;
  });

  animateRightToLeft();
</script>

</body>
</html>
