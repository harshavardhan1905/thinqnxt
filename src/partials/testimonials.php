
  <style>
    

    /* ===============================
       TESTIMONIALS SECTION
    ================================ */

    .testimonials-section {
      padding: 0px 20px 20px 0px;
    }

    .testimonials-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* ===============================
       HEADING
    ================================ */

    .testimonials-heading {
      text-align: center;
      margin-bottom: 56px;
    }

    .testimonials-heading h2 {
      font-size: 40px;
      font-weight: 800;
      letter-spacing: -0.02em;
      margin-bottom: 12px;
    }

    .testimonials-heading p {
      max-width: 640px;
      margin: 0 auto;
      font-size: 18px;
      line-height: 1.6;
      color: #898161;
    }

   /* ===============================
   TESTIMONIALS GRID (HORIZONTAL)
================================ */

.testimonials-grid {
  display: flex;
  gap: 20px;
  overflow-x: auto;
  scroll-behavior: smooth;
  padding-bottom: 16px;

  scroll-snap-type: x mandatory;
  padding:10px 0px 10px 0px; 

  /* Hide scrollbar */
  scrollbar-width: none;
}

.testimonials-grid::-webkit-scrollbar {
  display: none;
}

/* ===============================
   CARD
================================ */

.testimonials-card {
  flex: 0 0 386px; /* fixed width */
  scroll-snap-align: start;

  background: #ffffff;
  padding: 32px;
  /* border: 1px solid grey; */
  border-radius: 16px;
  border: 1px solid;
  box-shadow: 0 4px 12px rgba(0,0,0,0.03);
  transition: all 0.3s ease;
}

.testimonials-card:hover {
  box-shadow: 0 14px 32px rgba(0,0,0,0.08);
  transform: translateY(-4px);
}


    /* ===============================
       PROFILE
    ================================ */

    .testimonials-profile {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 20px;
    }

    .testimonials-avatar {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background-size: cover;
      background-position: center;
      border: 2px solid rgba(238, 196, 43, 0.35);
    }

    .testimonials-name {
      font-size: 16px;
      font-weight: 700;
    }

    .testimonials-role {
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: #898161;
      margin-top: 2px;
    }

    /* ===============================
       STARS
    ================================ */

    .testimonials-stars {
      display: flex;
      gap: 4px;
      color: #eec42b;
      font-size: 18px;
      margin-bottom: 12px;
    }

    .material-symbols-outlined {
      font-variation-settings: 'FILL' 1;
    }

    /* ===============================
       QUOTE
    ================================ */

    .testimonials-quote {
      font-size: 16px;
      line-height: 1.7;
      font-style: italic;
      color: rgba(24,22,17,0.9);
    }

    /* ===============================
       CTA
    ================================ */

    .testimonials-cta {
      display: flex;
      justify-content: center;
      margin-top: 48px;
    }

    .testimonials-button {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 14px 28px;
      background: #f4f3f0;
      border-radius: 10px;
      border: 1px solid rgba(24,22,17,0.08);
      font-size: 14px;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .testimonials-button:hover {
      background: rgba(238,196,43,0.25);
    }

    .testimonials-button span:last-child {
      transition: transform 0.3s ease;
    }

    .testimonials-button:hover span:last-child {
      transform: translateX(4px);
    }

    /* ===============================
       LOGOS
    ================================ */

    .testimonials-logos {
      margin-top: 80px;
      display: flex;
      justify-content: center;
      gap: 48px;
      opacity: 1;
      /* filter: grayscale(1); */
    }

    .testimonials-logo {
      width: 96px;
      height: 32px;
      background: #f5c518;
      border-radius: 4px;
      text-align: center;
    }
    .testimonials-logo img{
      margin: 0 auto;
      height: 80%;
 
    }
   /* ===============================
   CAROUSEL WRAPPER
================================ */

.testimonials-carousel {
  position: relative;
}

/* ===============================
   NAV BUTTONS
================================ */

.testimonial-nav {
  position: absolute;
  /* top: 60%; */
  transform: translateY(-50%);
  z-index: 10;

  width: 48px;
  height: 48px;
  border-radius: 50%;
  border: none;
  background: #ffffff;
  box-shadow: 0 8px 24px rgba(0,0,0,0.12);
  cursor: pointer;

  font-size: 20px;
  font-weight: bold;

  display: flex;
  align-items: center;
  justify-content: center;

  transition: all 0.25s ease;
}

.testimonial-nav:hover {
  background: #eec42b;
  color: #181611;
}

/* LEFT & RIGHT positioning */

.testimonial-nav {
  top: 50%;
  transform: translateY(-50%);
}

.testimonial-nav.right {
  right: -50px;
}
.testimonial-nav.left {
  left: -50px;
}

/* ===============================
   MOBILE SAFE
================================ */

@media (max-width: 768px) {
  .testimonial-nav {
    display: none;
  }
}

  </style>


<body>

<section class="testimonials-section">
  <div class="testimonials-container testimonials-carousel">

    <!-- Heading -->
    <!-- <div class="testimonials-heading">
      <h2>What Our Clients Say</h2>
      <p>
        Trusted by over 10,000 professionals worldwide.
        Our commitment to excellence drives every partnership we build.
      </p>
    </div> -->

      <button class="testimonial-nav left" onclick="scrollTestimonials(-1)">
    ←
  </button>

    <!-- Grid -->
    <div class="testimonials-grid">
        <!-- <button class="left-move-testimonial" onclick="scrollTestimonials(-1)">←</button> -->

      <!-- Card 1 -->
      <div class="testimonials-card">
        <div class="testimonials-profile">
          <div class="testimonials-avatar" style="background-image:url('https://i.pravatar.cc/100?img=47')"></div>
          <div>
            <div class="testimonials-name">Sarah Jenkins</div>
            <div class="testimonials-role">Data Anylyst, IBM.</div>
          </div>
        </div>
         <div class="testimonials-stars">
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
        </div>
        <p class="testimonials-quote">
          “The efficiency and speed of this platform are unmatched.
          It has completely transformed how our team handles complex workflows.”
        </p>
      </div>

      <!-- Card 2 -->
      <div class="testimonials-card">
        <div class="testimonials-profile">
          <div class="testimonials-avatar" style="background-image:url('https://i.pravatar.cc/100?img=12')"></div>
          <div>
            <div class="testimonials-name">Marcus Thorne</div>
            <div class="testimonials-role">Data Scientist, HBDS</div>
          </div>
        </div>
         <div class="testimonials-stars">
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
        </div>
        <p class="testimonials-quote">
          “Exceptional design quality and professionalism.
          Clean, modern, and perfectly aligned with our brand.”
        </p>
      </div>
      <!-- Card 2 -->
      <div class="testimonials-card">
        <div class="testimonials-profile">
          <div class="testimonials-avatar" style="background-image:url('https://i.pravatar.cc/100?img=12')"></div>
          <div>
            <div class="testimonials-name">Marcus Thorne</div>
            <div class="testimonials-role">Data Sceince, TCS</div>
          </div>
        </div>
        <div class="testimonials-stars">
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
        </div>
        <p class="testimonials-quote">
          “Exceptional design quality and professionalism.
          Clean, modern, and perfectly aligned with our brand.”
        </p>
      </div>
      <!-- Card 2 -->
      <div class="testimonials-card">
        <div class="testimonials-profile">
          <div class="testimonials-avatar" style="background-image:url('https://i.pravatar.cc/100?img=12')"></div>
          <div>
            <div class="testimonials-name">Marcus Thorne</div>
            <div class="testimonials-role">Data Sceince, TCS</div>
          </div>
        </div>
         <div class="testimonials-stars">
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
        </div>
        <p class="testimonials-quote">
          “Exceptional design quality and professionalism.
          Clean, modern, and perfectly aligned with our brand.”
        </p>
      </div>

      <!-- Card 3 -->
      <div class="testimonials-card">
        <div class="testimonials-profile">
          <div class="testimonials-avatar" style="background-image:url('https://i.pravatar.cc/100?img=32')"></div>
          <div>
            <div class="testimonials-name">Elena Rodriguez</div>
            <div class="testimonials-role">Data Sceince, TCS</div>
          </div>
        </div>
        <div class="testimonials-stars">
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
          <span class="material-symbols-outlined"><i data-lucide="star" class="star filled"></i>
</span>
        </div>
        <p class="testimonials-quote">
          “Implementation was seamless and the interface so intuitive
          our team needed zero training.”
        </p>
      </div>

    </div>
      <button class="testimonial-nav right" onclick="scrollTestimonials(1)">
    →
  </button>

    <!-- CTA -->
    <!-- <div class="testimonials-cta">
      <button class="testimonials-button">
        View All Success Stories
        <span class="material-symbols-outlined">arrow_forward</span>
      </button>
    </div> -->

    <!-- Logos -->
    <!-- <div class="testimonials-logos">
      <div class="testimonials-logo">
        <img src="../assets/images/companies/HSBC481241.png" alt="Company Logo 1">
      </div>
      <div class="testimonials-logo">
        <img src="../assets/images/icons/google.png" alt="">
      </div>
      <div class="testimonials-logo">
        <img src="../assets/images/companies/ola-text.png" alt="" class="">
      </div>
      <div class="testimonials-logo">
        <img src="../assets/images/companies/zomato-text.png" alt="">
      </div>
      <div class="testimonials-logo">
        <img src="../assets/images/companies/Infosys481241.png" alt="">
      </div>
    </div> -->

  </div>
</section>

<script>
  const grid = document.querySelector('.testimonials-grid');

  function scrollTestimonials(direction) {
    if (!grid) return;

    const card = grid.querySelector('.testimonials-card');
    if (!card) return;

    const gap = 32;
    const cardWidth = card.offsetWidth + gap;

    grid.scrollBy({
      left: direction * cardWidth,
      behavior: 'smooth'
    });
  }


  
</script>

</body>

