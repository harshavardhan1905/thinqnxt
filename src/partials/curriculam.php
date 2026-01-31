<style>
        
/* =============================================
           Curriculum start
 ============================================= */
.cur-con-sec {
  position: relative;
  /* height: 400vh; */
}

/* ===== STICKY FRAME ===== */
/* .cur-con-sticky {
  position: sticky;
  top: 0;
  height: 70vh;
  display: flex;
  overflow: hidden;
  background: #fff;
} */
  .cur-con-sticky {
  position: sticky;
  top: 120px;       /* 👈 offset below heading */
  height: 80vh;
  display: flex;
    flex-direction: column;
  overflow: hidden;
padding-top: 20px;
  background: #fff;
}
.cur-con-title {
  padding: 20px 0 10px;
  background: #fff;
  z-index: 3;
}
.cur-con-body {
  display: flex;
  flex: 1;                 /* fill remaining height */
  align-items: center;
  gap: 40px;
}



/* ===== RIGHT CONTENT FRAME ===== */
.skills-scroll-wrapper {
  position: relative;
  width: 65%;
  height: 100%;
  overflow: hidden;
}

/* ===== PANELS (NEW LOGIC – CRITICAL) ===== */
.skills-panel {
  position: absolute;          /* 🔑 layered */
  inset: 0;
  opacity: 0;
  transform: translateY(40px);
  pointer-events: none;

  transition:
    opacity 0.45s cubic-bezier(.4,0,.2,1),
    transform 0.45s cubic-bezier(.4,0,.2,1);
}

.skills-panel.is-active {
  opacity: 1;
  transform: translateY(0);
  pointer-events: auto;
}

/* ===== CONTENT WRAPPER (OLD DESIGN) ===== */
.skill-track-section {
  position: absolute;
  width: 100%;
  max-width: 1100px;
  margin: 0 auto;
  padding: 0px 20px;

}

/* Header */
.skill-track-header h3 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 10px;
}
.section-break{
  width: 100%;
  border-top:1px  grey ;
  background: linear-gradient(
      to top,
      rgba(255, 255, 255, 0.95),
      rgba(255, 255, 255, 0.6),
      rgba(255, 255, 255, 0)
    );
    height: 1px;
    margin-top: 20px;
    border-style: hidden;
    box-shadow: 0px 0px 4px 0px;
}

.skill-track-header h3 span {
  color: #e6003e;
  margin-right: 6px;
}

.skill-track-header p {
  font-size: 16px;
  color: #555;
  max-width: 650px;
  line-height: 1.6;
}

/* Stats */
.skill-track-stats {
  display: flex;
  gap: 18px;
  flex-wrap: wrap;
  margin: 24px 0 32px;
  font-size: 15px;
}

.skill-track-stats strong {
  color: #111;
}

/* Track list */
.skill-track-list {
  display: flex;
  flex-direction: column;
  gap: 14px;
}

.skill-track-item {
  background: #fff;
  border: 1px solid #eee;
  border-radius: 12px;
  padding: 18px 22px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: 0.25s ease;
}

.skill-track-item:hover {
  box-shadow: 0 12px 30px rgba(0,0,0,0.06);
  transform: translateY(-2px);
}

/* Left */
.skill-track-item .left {
  display: flex;
  align-items: center;
  gap: 10px;
}

.skill-track-item .arrow {
  color: #e6003e;
  font-size: 18px;
}

.skill-track-item .label {
  color: #e6003e;
  font-weight: 600;
}

.skill-track-item strong {
  color: #111;
}

/* Right */
.skill-track-item .right {
  color: #0b63ff;
  font-weight: 500;
}

/* Section wrapper */

/* Heading block */
.cur-heading {
  margin-bottom: 25px; /* space before lists */

}

.cur-heading h4 {
  font-size: 24px;
  font-weight: 500;
  margin-bottom: 10px;
  font-style: italic;
}

.cur-heading p {
  max-width: 820px;
  font-size: 16px;
  font-weight: 300;
  color: #555;
  line-height: 1.6;
}

/* Grid for curriculum */
.curriculum-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 28px;
}

/* Lists reset */
.curriculum-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* List items */
.curriculum-list li {
  display: flex;
  align-items: center;
  gap: 10px;

  padding: 14px 18px;
  margin-bottom: 10px;

  background: #ffffff;
  border: 1px solid #eee;
  border-radius: 12px;

  font-size: 15px;
  font-weight: 500;
  color: #222;

  transition: box-shadow 0.25s ease, transform 0.25s ease;
}

/* Icons */
.curriculum-list li svg {
  width: 18px;
  height: 18px;
  color: #e6003e;
  flex-shrink: 0;
}

/* Hover effect */
.curriculum-list li:hover {
  box-shadow: 0 10px 26px rgba(0, 0, 0, 0.06);
  transform: translateY(-2px);
}

/* Mobile responsive */
@media (max-width: 768px) {
  .curriculum-grid {
    grid-template-columns: 1fr;
  }

  .skill-track-section {
    padding: 40px 16px;
  }
}


/* Mobile */
@media (max-width: 640px) {
  .skill-track-item {
    flex-direction: column;
    align-items: flex-start;
    gap: 8px;
  }
}

/* section2 */
/* Architecture grid */
.architecture-grid {
  margin-top: 10px;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 32px;
}

/* Card */
.architecture-card {
  background: linear-gradient(180deg, #ffffff, #fafafa);
  border: 1px solid #eee;
  border-radius: 16px;
  padding: 26px;
  transition: box-shadow 0.25s ease, transform 0.25s ease;
}

.architecture-card:hover {
  box-shadow: 0 16px 36px rgba(0, 0, 0, 0.08);
  transform: translateY(-3px);
}

/* Card header */
.card-header {
  display: flex;
  align-items: center;
  gap: 2px;
  margin-bottom: 18px;
}

.card-icon {
  font-size: 22px;
}

.card-header h5 {
  font-size: 18px;
  font-weight: 500;
  margin: 0;
  color: #111;
}

/* List */
.architecture-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.architecture-list li {
  padding: 12px 0;
  font-size: 15px;
  font-weight: 500;
  color: #333;
  border-bottom: 1px dashed #e5e5e5;
}

.architecture-list li:last-child {
  border-bottom: none;
}



/* section 3 */
/* Switcher */
.tool-switcher {
  margin-top: 36px;
  display: flex;
  gap: 14px;
}

.tool-tab {
  padding: 10px 18px;
  border-radius: 999px;
  border: 1px solid #ddd;
  background: #fff;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.25s ease;
}

.tool-tab.is-active {
  background: #e6003e;
  color: #fff;
  border-color: #e6003e;
}

/* Content area */
.tool-content {
  margin-top: 30px;
}
/* ===== STATIC TOOLS LAYOUT ===== */
.tools-static-grid {
  margin-top: 30px;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 28px;
}

/* Column card */
.tools-column {
  background: linear-gradient(180deg, #ffffff, #fafafa);
  border: 1px solid #eee;
  border-radius: 18px;
  padding: 24px;
}

/* Badge (replaces buttons visually) */
.tools-badge {
  display: inline-block;
  margin-bottom: 18px;
  padding: 8px 16px;
  border-radius: 999px;
  border: 1px solid #ddd;
  font-size: 13px;
  font-weight: 600;
  background: #fff;
}

.tools-badge-active {
  background: #e6003e;
  color: #fff;
  border-color: #e6003e;
}

/* Chips reuse your existing design */
.tools-column .tool-chip {
  margin-bottom: 10px;
}

/* Mobile */
@media (max-width: 768px) {
  .tools-static-grid {
    grid-template-columns: 1fr;
  }
}


/* Groups */
.tool-group {
  display: none;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 18px;
  opacity: 0;
  transform: translateY(8px);
  transition: 0.25s ease;
}

.tool-group.is-active {
  display: grid;
   opacity: 1;
  transform: translateY(0);
}

/* Tool chips */
.tool-chip {
  padding: 10px 18px;
  background: linear-gradient(180deg, #ffffff, #fafafa);
  border: 1px solid #eee;
  border-radius: 14px;
  font-size: 15px;
  font-weight: 400;
  color: #222;

  transition: 0.25s ease;
}

.tool-chip:hover {
  transform: translateY(-3px);
  box-shadow: 0 14px 30px rgba(0, 0, 0, 0.08);
}
.skill-track-section,
.tool-switcher,
.tool-tab {
  pointer-events: auto;
}

/* Mobile */
@media (max-width: 768px) {
  .tool-switcher {
    flex-wrap: wrap;
  }
}

/* Mobile */
@media (max-width: 768px) {
  .architecture-grid {
    grid-template-columns: 1fr;
  }
}

/* section 1*/
.feature-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.feature-list li {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 14px;
  color: #374151;
  padding: 6px 0;
  font-weight: 500;
}

.feature-list svg {
  flex-shrink: 0;
}

/*Section 4 */
.capstone-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}

.capstone-card {
  border: 1px solid #eee;
  border-radius: 16px;
  padding: 20px;
  background: #fff;
}
.capstone-card:hover{
    box-shadow: 0px 0px 2px 0px;
}

.capstone-card h5 {
  font-size: 18px;
  font-weight:400 ;
  margin-bottom: 6px;
  padding-bottom: 3px;
  border-bottom: 1px solid grey;
}

.capstone-card ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.capstone-card li {
  display: flex;
  align-items: center;
  gap: 5px;
  padding: 6px 0;
  border-top: 1px dashed #eee;
  font-size: 14.5px;
  font-weight: 300;
  color: #222;
}

/* Lucide icon style */
.capstone-card li svg {
  width: 16px;
  height: 16px;
  color: #e6003e;
  flex-shrink: 0;
}

@media (max-width: 576px) {
  .capstone-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }

  .capstone-card {
    padding: 20px;
  }

  .capstone-card h5 {
    font-size: 16px;
  }

  .capstone-card li {
    font-size: 14px;
  }
}
@media (min-width: 577px) and (max-width: 991px) {
  .capstone-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
}
/* Pyramid CSS*/
/* ===== PYRAMID ===== */
.py-pyramid {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 14px;
  align-self: center;
  transform: scale(1.25);   /* 🔼 increase size */
  transform-origin: center;
}

/* Triangle base */
.py-level {
  position: relative;
  height: 0;

  border-left: solid transparent;
  border-right: solid transparent;
  filter: drop-shadow(0 6px 10px rgba(238, 223, 111, 0.885));
  transition: border-bottom-color 0.3s ease, filter 0.3s ease;
}

/* Levels */
.py-l1 {
  border-left-width: 60px;
  border-right-width: 60px;
  border-bottom: 40px solid #e5e7eb;
}

.py-l2 {
  border-left-width: 90px;
  border-right-width: 90px;
  border-bottom: 50px solid #e5e7eb;
}
#pyScrollPanel {
  overflow: hidden; /* keep snap control */
}

#pyScrollPanel > .skills-panel {
  pointer-events: auto;
}





.py-l3 {
  border-left-width: 120px;
  border-right-width: 120px;
  border-bottom: 60px solid #e5e7eb;
}

.py-l4 {
  border-left-width: 150px;
  border-right-width: 150px;
  border-bottom: 70px solid #e5e7eb;
}

/* Number */
.py-level::before {
  content: attr(data-label);
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 14px;
  font-weight: 600;
  color: #111;
}

/* Arrow */
.py-level::after {
  content: '';
  position: absolute;
  top: 50%;
  width: 42px;
  height: 2px;
  background: #111;
}

.py-level.py-right::after {
  right: -60px;
  clip-path: polygon(0 40%, 85% 40%, 85% 0, 100% 50%, 85% 100%, 85% 60%, 0 60%);
}

.py-level.py-left::after {
  left: -60px;
  clip-path: polygon(100% 40%, 15% 40%, 15% 0, 0 50%, 15% 100%, 15% 60%, 100% 60%);
}

/* Active state */
.py-level.py-active {
  border-bottom-color: #ece569 !important;
  filter: drop-shadow(0 12px 20px rgba(52, 68, 2, 0.325));
}

/* ===== RIGHT SCROLL PANEL ===== */
.py-content-panel {
  height: 100%;
  overflow-y: auto;
  padding-right: 20px;
}

.py-content-step {
  min-height: 100vh;
  padding: 40px 0;
  font-size: 18px;
  border-bottom: 1px dashed #ddd;
}
/* ===== ARROW TEXT LABEL ===== */
.py-arrow-label {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 10px;
  font-weight: 500;
  white-space: nowrap;
  color: #9ca3af;              /* GREY by default */
  pointer-events: none;
  transition: color 0.25s ease;
}

/* Right arrow text */
.py-level.py-right .py-arrow-label {
  left: calc(100% + 70px);
  text-align: left;
}

/* Left arrow text */
.py-level.py-left .py-arrow-label {
  right: calc(100% + 70px);
  text-align: right;
}

/* ACTIVE → TEXT TURNS BLACK */
.py-level.py-active .py-arrow-label {
  color: #111;                 /* BLACK when active */
  font-weight: 500;
}

/* =============================================
            Carriculum end
 ============================================= */
</style>

<div class="container padding_bottom_100px">
    <div class="wrapper">

        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <!-- @@include('curriculam.html'); -->

      <div class="col-lg-12 cur-con-sec ">
            <div class="cur-con-sticky">
                <div class="section-head cur-con-title">
                    <h2 class="section-headings">
                        Learning Track & <span>Curriculum</span>
                    </h2>
                </div>
                <div class="cur-con-body">

            <div class="py-pyramid col-lg-4">
                
                <div class="py-level py-l1 py-right py-active"
                    data-level="1"
                    data-label="01"
                    data-title="Engineering Essentials"></div>

                <div class="py-level py-l2 py-left"
                    data-level="2"
                    data-label="02"
                    data-title="Platform & Pipelines"></div>

                <div class="py-level py-l3 py-right"
                    data-level="3"
                    data-label="03"
                    data-title="Tools & Frameworks"></div>

                <div class="py-level py-l4 py-left"
                    data-level="4"
                    data-label="04"
                    data-title="Capstone Projects"></div>
            </div>
         
            
                <div class="skills-scroll-wrapper col-lg-8" id="pyScrollPanel">

                       
                        <section class="skills-panel  skill-track-section is-active " data-level="1">
                         
                            
                                <div class="cur-heading">
                                <h4>01: Data Engineering Essentials</h4>
                                <p>
                                Kick off your journey by mastering core principles, programming skills,
                                and career-readiness strategies in Data Engineering.
                                </p>
                            </div>

                            <div class="curriculum-grid">

                                <ul class="curriculum-list">
                                <li><i data-lucide="layers"></i> Introduction to Data Engineering</li>
                                <li><i data-lucide="cpu"></i> Computer Science Fundamentals</li>
                                <li><i data-lucide="code"></i> Python Programming Essentials</li>
                                <li><i data-lucide="terminal"></i> Advanced Python for Data Engineers</li>
                                <li><i data-lucide="filter"></i> Data Preparation & Cleaning for ML</li>
                                </ul>

                                <ul class="curriculum-list">
                                <li><i data-lucide="box"></i> Docker & Containerization Basics</li>
                                <li><i data-lucide="briefcase"></i> Crafting a Winning Job Application</li>
                                <li><i data-lucide="database"></i> SQL Mastery for Data Engineering</li>
                                <li><i data-lucide="trending-up"></i> Continuous Growth as a Data Engineer</li>
                                <li><i data-lucide="sparkles"></i> Foundations of Generative AI</li>
                                </ul>

                            </div>
                         
                            
                           
                        </section>

                        
                        <section class="skills-panel  skill-track-section" data-level="2">
                        
                                <div class="cur-heading">
                                <h4>02: Platform & Pipeline Architecture</h4>
                                <p>
                                Build resilient, end-to-end data platforms—secure by design—and learn
                                how to model, store, and serve data at scale.
                                </p>
                            </div>

                            <div class="architecture-grid">

                               
                                <div class="architecture-card">
                                <div class="card-header">
                                    <span class="card-icon">🧱</span>
                                    <h5>Data Platforms & Pipelines</h5>
                                </div>

                                <ul class="architecture-list">
                                    <li>Designing Data Platforms & Pipelines</li>
                                    <li>Platform Security: Best Practices & Governance</li>
                                    <li>Selecting the Right Data Stores</li>
                                </ul>
                                </div>

                                <div class="architecture-card">
                                <div class="card-header">
                                    <span class="card-icon">📐</span>
                                    <h5>Data Modeling Foundations</h5>
                                </div>

                                <ul class="architecture-list">
                                    <li>Introduction to Data Modeling</li>
                                    <li>Relational Data Modeling Techniques</li>
                                    <li>Dimensional Modeling for Analytics</li>
                                </ul>
                            

                            </div>

                                </div>
                            </section>
                          


           
                        <section class="skills-panel skill-track-section" data-level="3">

  <div class="cur-heading">
    <h4>03: Core Tools & Frameworks</h4>
    <p>
      Get hands-on experience with the tools that power modern data workflows —
      from ingestion and orchestration to processing and visualization.
    </p>
  </div>

  <div class="tools-static-grid">

    <!-- LEFT -->
    <div class="tools-column">
      <span class="tools-badge tools-badge-active">Pipelines & Processing</span>

      <div class="tool-chip">FastAPI – API Development</div>
      <div class="tool-chip">Apache Airflow – Workflow Orchestration</div>
      <div class="tool-chip">Apache Spark – Distributed Processing</div>
      <div class="tool-chip">Databricks – Unified Analytics Platform</div>
      <div class="tool-chip">Apache Kafka – Stream Processing</div>
    </div>

    <!-- RIGHT -->
    <div class="tools-column">
      <span class="tools-badge tools-badge-active">Storage & Analytics</span>

      <div class="tool-chip">MongoDB – NoSQL Databases</div>
      <div class="tool-chip">Elasticsearch – Log & Search Analytics</div>
      <div class="tool-chip">Snowflake – Cloud Data Warehousing</div>
      <div class="tool-chip">dbt – Modular Data Transformations</div>
    </div>

  </div>
</section>


                        <section class="skills-panel skill-track-section" data-level="4">

  <div class="cur-heading">
    <h4>04: Capstone Projects</h4>
    <p>
      Apply your skills in real-world scenarios across major cloud platforms
      and open-source ecosystems.
    </p>
  </div>

  <div class="capstone-grid">

    <!-- Card 1 -->
    <div class="capstone-card">
      <h5>Real-Time & Big Data Systems</h5>
      <ul>
        <li><i data-lucide="activity"></i> Kafka, Spark & MongoDB Streaming</li>
        <li><i data-lucide="database"></i> Big Data Processing on Hadoop</li>
        <li><i data-lucide="clock"></i> Time Series Storage & Visualization</li>
        <li><i data-lucide="search"></i> Elasticsearch-Based Contact Tracing</li>
      </ul>
    </div>

    <!-- Card 2 -->
    <div class="capstone-card">
      <h5>Cloud Data Engineering</h5>
      <ul>
        <li><i data-lucide="cloud"></i> AWS Data Engineering Workflow</li>
        <li><i data-lucide="cloud-cog"></i> Azure Data Engineering Pipeline</li>
        <li><i data-lucide="cloud-sun"></i> GCP Data Engineering Solutions</li>
        <li><i data-lucide="layers"></i> Modern Data Lakes & Warehouses</li>
      </ul>
    </div>

    <!-- Card 3 -->
    <div class="capstone-card">
      <h5>DevOps, ML & Infrastructure</h5>
      <ul>
        <li><i data-lucide="git-branch"></i> ML Pipelines & Containerization on AWS</li>
        <li><i data-lucide="package"></i> Dockerized ETL with AWS & Grafana</li>
        <li><i data-lucide="settings"></i> Infrastructure as Code with Terraform</li>
        <li><i data-lucide="workflow"></i> Azure Pipelines Automation</li>
      </ul>
    </div>

  </div>
</section>


                    </div>
                    </div>

                </div> 
                   
            </div>
    </div>
</div>
<script>
(() => {
  const section = document.querySelector('.cur-con-sec');
  const panels  = [...document.querySelectorAll('.skills-panel')];
  const levels  = [...document.querySelectorAll('.py-level')];

  if (!section || !panels.length || !levels.length) return;

  const total = panels.length;
  let activeIndex = 0;

  /* --------------------------------
     🔑 DYNAMIC SCROLL HEIGHT (NEW)
  -------------------------------- */
  const setSectionHeight = () => {
    const vh = window.innerHeight;
    // panels + 1 viewport for clean exit
    section.style.height = `${(total + 1) * vh}px`;
  };

  setSectionHeight();
  window.addEventListener('resize', setSectionHeight);

  /* -------------------------------
     CREATE PYRAMID TITLES
  -------------------------------- */
  levels.forEach(level => {
    if (level.querySelector('.py-arrow-label')) return;

    const title = level.dataset.title;
    if (!title) return;

    const label = document.createElement('span');
    label.className = 'py-arrow-label';
    label.textContent = title;
    level.appendChild(label);
  });

  /* -------------------------------
     SCROLL → INDEX MAPPING
  -------------------------------- */
  window.addEventListener('scroll', () => {
    const rect = section.getBoundingClientRect();

    // usable scroll distance
    const max = Math.max(
      section.offsetHeight - window.innerHeight,
      1
    );

    // normalized progress (0 → 1)
    const progress = Math.min(
      Math.max(-rect.top / max, 0),
      1
    );

    // map progress to panel index
    const index = Math.min(
      Math.floor(progress * total),
      total - 1
    );

    if (index === activeIndex) return;
    activeIndex = index;

    /* CONTENT */
    panels.forEach((panel, i) => {
      panel.classList.toggle('is-active', i === activeIndex);
    });

    /* PYRAMID */
    levels.forEach((level, i) => {
      level.classList.toggle('py-active', i === activeIndex);
    });
  });
})();


// section 3 switch button

(() => {
  const tabs = document.querySelectorAll('.tool-tab');
  const groups = document.querySelectorAll('.tool-group');

  if (!tabs.length || !groups.length) return;

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const targetId = tab.dataset.target;

      /* ---- Toggle tabs ---- */
      tabs.forEach(t => t.classList.remove('is-active'));
      tab.classList.add('is-active');

      /* ---- Toggle content ---- */
      groups.forEach(group => {
        group.classList.toggle(
          'is-active',
          group.id === targetId
        );
      });
    });
  });
})();



</script>

