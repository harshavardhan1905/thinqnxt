
<style>
/* ===============================
   GLOBAL RESET
================================ */

/* ===============================
   BLOGS GRID
================================ */
.blogs-grid {
  height: 80vh;
  padding: 40px 16px 16px 16px;
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-template-rows: repeat(3, 1fr);
  gap: 16px;
  grid-auto-flow: dense;
}

/* Responsive */
@media (max-width: 1024px) {
  .blogs-grid {
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: auto;
  }
}

@media (max-width: 640px) {
  .blogs-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* ===============================
   CARD BASE
================================ */
.blogs-card {
  position: relative;
  overflow: hidden;
  border-radius: 16px;
  cursor: pointer;
  isolation: isolate;
}

/* Gradient overlay */
.blogs-card::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(0,0,0,0.85),
    rgba(0,0,0,0.35),
    transparent
  );
  z-index: 1;
}

/* ===============================
   BACKGROUND IMAGE
================================ */
.blogs-bg {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  transition: transform 0.7s ease;
  z-index: 0;
}

.blogs-card:hover .blogs-bg {
  transform: scale(1.06);
}

/* ===============================
   CONTENT
================================ */
.blogs-content {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 24px;
  z-index: 2;
  color: #fff;
}

.blogs-tag {
  display: inline-block;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  margin-bottom: 10px;
  opacity: 0.9;
}

.blogs-tag.primary {
  background: #f5c518;
  padding: 4px 10px;
  border-radius: 999px;
}

.blogs-title {
  font-size: 20px;
  font-weight: 800;
  line-height: 1.2;
  color: #fff;
}

.blogs-title.large {
  font-size: 34px;
}

.blogs-desc {
  font-size: 13px;
  color: #d1d5db;
  margin-top: 10px;
  max-width: 420px;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.blogs-card:hover .blogs-desc {
  opacity: 1;
}

/* ===============================
   CENTER ACTION
================================ */
.blogs-center-action {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0,0,0,0.25);
  backdrop-filter: blur(2px);
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: 2;
}

.blogs-card:hover .blogs-center-action {
  opacity: 1;
}

.blogs-button {
  background: #fff;
  color: #000;
  padding: 10px 22px;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  border-radius: 6px;
  border: none;
  cursor: pointer;
  transition: all 0.25s ease;
}

.blogs-card:hover .blogs-button{
  background: #f6ff00;
  color: #000000;
}

/* ===============================
   GRID SPANS
================================ */
.blogs-col-1 { grid-column: span 1; }
.blogs-col-2 { grid-column: span 2; }
.blogs-col-3 { grid-column: span 3; }

.blogs-row-1 { grid-row: span 1; }
.blogs-row-2 { grid-row: span 2; }
</style>


<body>

<div class="blogs-grid">

  <!-- BIG FEATURE -->
  <div class="blogs-card blogs-col-2 blogs-row-2">
    <div class="blogs-bg" style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475');"></div>
    <div class="blogs-content">
      <span class="blogs-tag primary">Technology</span>
      <h2 class="blogs-title large">The Future of Retro-Futurism</h2>
      <p class="blogs-desc">
        Exploring how modern digital experiences revive retro aesthetics with futuristic thinking.
      </p>
    </div>
  </div>

  <!-- ARCHITECTURE -->
  <div class="blogs-card blogs-col-2 blogs-row-1">
    <div class="blogs-bg" style="background-image:url('https://images.unsplash.com/photo-1503387762-592deb58ef4e');"></div>
    <div class="blogs-content">
      <span class="blogs-tag">Architecture</span>
      <h3 class="blogs-title">Minimalist Concrete Stairs</h3>
    </div>
  </div>

  <!-- ART -->
  <div class="blogs-card blogs-col-1 blogs-row-2">
    <div class="blogs-bg" style="background-image:url('https://images.unsplash.com/photo-1545239351-1141bd82e8a6');"></div>
    <div class="blogs-content">
      <span class="blogs-tag primary">Art</span>
      <h3 class="blogs-title">Digital Art Revolution & AI</h3>
    </div>
  </div>

  <!-- SMALL -->
  <div class="blogs-card blogs-col-1 blogs-row-1">
    <div class="blogs-bg" style="background-image:url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee');"></div>
    <div class="blogs-content">
      <h3 class="blogs-title">Nature × Modernity</h3>
    </div>
  </div>

  <!-- TYPOGRAPHY -->
  <div class="blogs-card blogs-col-2 blogs-row-1">
    <div class="blogs-bg" style="background-image:url('https://images.unsplash.com/photo-1529070538774-1843cb3265df');"></div>

    <div class="blogs-center-action">
      <button class="blogs-button">Read Masterclass</button>
    </div>

    <div class="blogs-content">
      <span class="blogs-tag">Typography</span>
      <h3 class="blogs-title">The Craft of Modern Sans</h3>
    </div>
  </div>

  <!-- PRODUCT -->
  <div class="blogs-card blogs-col-1 blogs-row-2">
    <div class="blogs-bg" style="background-image:url('https://images.unsplash.com/photo-1523275335684-37898b6baf30');"></div>
    <div class="blogs-content">
      <span class="blogs-tag primary">Product</span>
      <h3 class="blogs-title">Functional Aesthetics 2024</h3>
    </div>
  </div>

  <!-- LIFESTYLE -->
  <div class="blogs-card blogs-col-3 blogs-row-1">
    <div class="blogs-bg" style="background-image:url('https://images.unsplash.com/photo-1501785888041-af3ef285b470');"></div>
    <div class="blogs-content">
      <span class="blogs-tag">Lifestyle</span>
      <h3 class="blogs-title">Escaping the Digital Noise</h3>
    </div>
  </div>
   <div class="blogs-card blogs-col-1 blogs-row-1">
    <div class="blogs-bg" style="background-image:url('https://images.unsplash.com/photo-1501785888041-af3ef285b470');"></div>
    <div class="blogs-content">
      <span class="blogs-tag">Lifestyle</span>
      <h3 class="blogs-title">Escaping the Digital Noise</h3>
    </div>
  </div>
   <div class="blogs-card blogs-col-1 blogs-row-1">
    <div class="blogs-bg" style="background-image:url('https://images.unsplash.com/photo-1501785888041-af3ef285b470');"></div>
    <div class="blogs-content">
      <span class="blogs-tag">Lifestyle</span>
      <h3 class="blogs-title">Escaping the Digital Noise</h3>
    </div>
  </div>



</div>
</body>
