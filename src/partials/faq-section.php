<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>FAQ Section</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<style>
/* ===============================
   FAQ SECTION ONLY (SCOPED)
================================ */

.faq-sec-wrapper {
  max-width: 1200px;
  /* margin: 0 auto; */
  padding: 80px 0px;
  color: #111827;
  display: flex;
}
.left-faq-section{
  width: 40%;
}
.right-faq-section{
  width: 60%;
}

/* ===============================
   HEADER
================================ */
.faq-sec-header {
  text-align: center;
  margin-bottom: 50px;
}

.faq-sec-header h2 {
  font-size: 42px;
  font-weight: 700;
  margin-bottom: 12px;
}

.faq-sec-header h2 span {
  color: #eab308;
}

.faq-sec-header p {
  color: #6b7280;
  max-width: 600px;
  margin: 0 auto;
}

/* ===============================
   CATEGORY BUTTONS
================================ */
.faq-sec-tabs {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  gap: 12px;
  margin-bottom: 30px;
}

.faq-sec-tab {
  padding: 12px 24px;
  border-radius: 10px;
  border: 1px solid #e5e7eb;
  background: transparent;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.25s ease;
  color: #374151;
}

.faq-sec-tab:hover {
  background: #e5e7eb;
}

.faq-sec-tab.active {
  background: #eab308;
  color: #ffffff;
  border-color: #eab308;
  box-shadow: 0 8px 20px rgba(234, 179, 8, 0.35);
}

/* ===============================
   FAQ LIST
================================ */
.faq-sec-list {
  max-width: 760px;
  margin: 0 auto;
}

.faq-sec-item {
  background: #ffffff;
  border: 1px solid #e5e7eb;
  border-radius: 18px;
  margin-bottom: 14px;
  overflow: hidden;
  transition: border-color 0.3s ease;
}

.faq-sec-item:hover {
  border-color: #eab308;
}

/* ===============================
   QUESTION
================================ */
.faq-sec-question {
  width: 100%;
  padding: 16px 24px;
  background: none;
  border: none;
  text-align: left;
  font-size: 16px;
  font-weight: 400;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  color: #111827;
}

.faq-sec-icon {
  color: #9ca3af;
  transition: transform 0.3s ease, color 0.3s ease;
}

.faq-sec-item.active .faq-sec-icon {
  transform: rotate(45deg);
  color: #eab308;
}

/* ===============================
   ANSWER
================================ */
.faq-sec-answer {
  max-height: 0;
  overflow: hidden;
  padding: 0 24px;
  transition: max-height 0.35s ease, padding 0.35s ease;
}

.faq-sec-item.active .faq-sec-answer {
  max-height: 200px;
  padding: 0 24px 24px;
}

.faq-sec-answer p {
  font-size: 14px;
  color: #6b7280;
  line-height: 1.7;
}

/* ===============================
   CTA
================================ */
.faq-sec-cta {
  text-align: left;
  margin-top: 0px;
}

.faq-sec-cta a {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 16px 32px;
  border-radius: 18px;
  background: #f59e0b;
  color: #ffffff;
  font-weight: 700;
  text-decoration: none;
  transition: opacity 0.25s ease;
}
/* Image Card */
.faq-sec-image {
  margin-top: 90px;
  border-radius: 20px;
  overflow: hidden;
  border: 1px solid #fde68a;
  background: #fff7ed;
  width: 300px;
}

.faq-sec-image img {
  width: 100%;
  display: block;
}


.faq-sec-cta a:hover {
  opacity: 0.9;
}
</style>
</head>

<body>

<section class="faq-sec-wrapper">

  <!-- HEADER -->
  <!-- <div class="faq-sec-header">
    <h2>Frequently Asked <span>Questions</span></h2>
    <p>Everything you need to know about our programs and career outcomes.</p>
  </div> -->

   

  <div class="left-faq-section">
      <!-- CTA -->
    <div class="faq-sec-cta">
      <p>Got Questions? We’ve Got Answers</p>
      <a href="#">
        Request Call Back
        <span class="material-icons-round">arrow_forward</span>
      </a>
    </div>

    <div class="faq-sec-image">
      <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1200&auto=format&fit=crop" alt="Support team">
    </div>
  </div>

  <div class="right-faq-section">

    <!-- TABS -->
    <div class="faq-sec-tabs">
      <button class="faq-sec-tab" onclick="filterFaq('learning', this)">Learning</button>
      <button class="faq-sec-tab" onclick="filterFaq('degree', this)">Degree</button>
      <button class="faq-sec-tab active" onclick="filterFaq('placement', this)">Placement</button>
      <button class="faq-sec-tab" onclick="filterFaq('admission', this)">Admission</button>
      <button class="faq-sec-tab" onclick="filterFaq('fees', this)">Tuition Fee</button>
    </div>

    <!-- FAQ LIST -->
    <div class="faq-sec-list">

      <div class="faq-sec-item" data-category="placement">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Does thinqNxt provide placement support?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes. We offer complete placement assistance including resume building, mock interviews, and job referrals through our industry network. </p>
        </div>
      </div>

      <div class="faq-sec-item" data-category="placement">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          What companies hire ThinqNxt graduates?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Our students have been placed in top MNCs and startups across India and globally, including companies in FinTech, Healthcare, E-Commerce, and Consulting. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="placement">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Do you offer any placement guarantee?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>While we ensure interview opportunities, we do not offer guaranteed placement. However, our training is structured to make you job-ready within 6 months. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="placement">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          What kind of roles will i be eligible for after completing the course?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>You will be prepared for roles such as:

Full Stack Data Science br> Data Engineering,
Big Data Developer,
Data Analyst,
ETL Developer,
ML Ops Engineer (entry level)</p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="placement">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Do you conduct mock interviews?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes. We conduct multiple mock interviews with technical and HR panels to boost your confidence before facing real companies. </p>
        </div>
      </div>

      <div class="faq-sec-item" data-category="learning">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Is the learning hands-on?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes, the program focuses on real-world projects and tools.</p>
        </div>
      </div>
    <div class="faq-sec-item" data-category="learning">
      <button class="faq-sec-question" onclick="toggleFaq(this)">
          Is this program beginner-friendly?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes. Our program starts from the basics and gradually moves to advanced concepts with real-world use cases, making it suitable for beginners as well as upskilling professionals.</p>
        </div>
  </div>
    <div class="faq-sec-item" data-category="learning">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Are the sessions live or recorded?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
        <p>We offer a hybrid model with live instructor-led classes, recorded sessions for revision, and doubt-clearing sessions weekly.</p>
      </div>
  </div>
  <div class="faq-sec-item" data-category="learning">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Do I get to work on real projects?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
        <p>Absolutely. You’ll work on 6+ live projects simulating real-time data pipelines, dashboards, cloud integrations, and machine learning solutions.</p>
      </div>
    </div>
    <div class="faq-sec-item" data-category="learning">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          What will I Learn at ThinqNxt?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>You’ll gain in-depth knowledge in Data Engineering, Cloud Platforms (AWS, Azure, GCP), Machine Learning, Big Data Technologies, SQL, Python, and industry-based project execution. </p>
        </div>
</div>
      <div class="faq-sec-item" data-category="learning">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          What tools and technologies will I get hands-on experience with?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>You will work with tools like Apache Spark, Hadoop, Snowflake, Databricks, Airflow, Power BI, Tableau, Python, SQL, Terraform, Git, Docker, and cloud platforms like AWS, GCP, and Azure.</p>
        </div>
      </div>
</div>

      <div class="faq-sec-item" data-category="degree">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Will i receive a certificate upon completion?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes, you will receive an industry-recognized certificate upon successful completion of the course and final project evaluation. Run their online leaning management system by histudy education template any where and time. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="degree">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Is this a government-approved diploma or a private certification?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>ThinqNxt offers a Post Graduate Program certificate issued by our training body and aligned with industry standards. It is not a university degree but a professional certification designed to boost your career. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="degree">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Is there any exam for certification?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes, we conduct module-wise assessments and a capstone project evaluation before certification is awarded. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="degree">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
        Is the certification verifiable?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes. Each certificate comes with a unique verification code which can be validated by employers or through our website. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="degree">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Can I add the certificate to LinkedIn?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes, our certification is LinkedIn-compatible and helps improve visibility with recruiters. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="admission">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          What is the eligibility to join the program?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Graduates from any stream (preferably Computer Science, Engineering, Mathematics) or final-year students can apply. Basic knowledge of programming is a plus but not mandatory. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="admission">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          How can I apply?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>You can apply online through our website by filling the registration form. Our admission team will get in touch with you for further steps. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="admission">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Can i get update regularly and For how long do I get updates?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes, We will get update the Histudy. And you can get it any time. Next time we will comes with more feature. You can be get update for unlimited times. Our dedicated team works for update.  </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="admission">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          What is the selection process after I apply?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>After applying, you will be contacted for a screening call. In some cases, a small aptitude or communication round may be conducted. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="admission">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
         Can working professionals apply?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
          <div class="faq-sec-answer">
            <p>Yes!</p>
      </div>
      </div>


      <div class="faq-sec-item" data-category="fees">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          What is the total fee for the course?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>It includes access to live classes, LMS, project mentoring, and placement support. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="fees">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Do you offer installement plans?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes, we offer flexible installment options. Please reach out to our team for a personalized fee breakup. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="fees">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Are there any hidden charges beyond the tuition fee?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>No. All course materials, project access, and certification are included in the quoted tuition fee. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="fees">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
         What are the payment methods accepted?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>We accept payments via UPI, Net Banking, Debit/Credit Cards, and EMI options through partnered platforms. </p>
        </div>
      </div>
      <div class="faq-sec-item" data-category="fees">
        <button class="faq-sec-question" onclick="toggleFaq(this)">
          Is there any scholorship or discount available?
          <span class="material-icons-round faq-sec-icon">add</span>
        </button>
        <div class="faq-sec-answer">
          <p>Yes, early bird discounts and referral scholarships are available for a limited time. Contact our admissions team to learn more. </p>
        </div>
      </div>

  </div>

 
  </div>


</section>

<script>
/* ===============================
   FILTER FAQ
================================ */
function filterFaq(category, btn) {
  document.querySelectorAll('.faq-sec-tab').forEach(tab => tab.classList.remove('active'));
  btn.classList.add('active');

  document.querySelectorAll('.faq-sec-item').forEach(item => {
    item.classList.remove('active');
    item.style.display =
      item.dataset.category === category ? 'block' : 'none';
  });
}

/* ===============================
   ACCORDION
================================ */
function toggleFaq(button) {
  const item = button.closest('.faq-sec-item');
  document.querySelectorAll('.faq-sec-item').forEach(i => {
    if (i !== item) i.classList.remove('active');
  });
  item.classList.toggle('active');
}

/* DEFAULT LOAD */
filterFaq('placement', document.querySelector('.faq-sec-tab.active'));
</script>

</body>
</html>
