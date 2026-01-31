<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Why Choose ThinqNxt</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<style>
/* =========================
   WHY-CHOOSE SECTION STYLES
   ========================= */

/* .why-choose {
    padding: 4rem 1.5rem;
    max-width: 1400px;
    margin: auto;
} */


.why-choose-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

/* Card */
.why-choose-card {
    position: relative;
    padding: 2rem;
     min-height: 400px;          /* 👈 adjust (400–480px works well) */
    display: flex;
    flex-direction: column;
    border-radius: 24px;
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(26, 24, 24, 0.5);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    overflow: hidden;
    justify-content: space-evenly;
}

.dark .why-choose-card {
    background: rgba(30, 41, 59, 0.4);
    border-color: rgba(255, 255, 255, 0.1);
}

.why-choose-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 0 25px rgba(255, 215, 0, 0.25);
}

/* Top bar */
.why-choose-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(to right, transparent, #ffd700, transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.why-choose-card:hover::before {
    opacity: 1;
}

/* Card header */
.why-choose-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    /* margin-bottom: 1.5rem; */
}

.why-choose-tag {
    font-size: 1.3rem;
    letter-spacing: 0.2em;
    font-weight: 700;
    text-transform: uppercase;
    color: #9d9a81;
}

.why-choose-icon {
    width: 56px;
    height: 56px;
    border-radius: 18px;
    background: linear-gradient(135deg, #e2e8f0, #ffffff);
    display: flex;
    align-items: center;
    justify-content: center;
}

.dark .why-choose-icon {
    background: linear-gradient(135deg, #334155, #1e293b);
}

.why-choose-icon span {
    font-size: 32px;
    color: #ffd700;
}

/* Card content */
.why-choose-title {
    /* font-family: 'Space Grotesk', sans-serif; */
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 0.5rem;
}

.dark .why-choose-title {
    color: #ffffff;
}

.why-choose-divider {
    width: 48px;
    height: 4px;
    background: #ffd700;
    border-radius: 999px;
    margin: 1rem 0 1.5rem;
    transition: width 0.3s ease;
}

.why-choose-card:hover .why-choose-divider {
    width: 80px;
}

/* List */
.why-choose-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.why-choose-list li {
    display: flex;
    gap: 0.75rem;
    font-size: 0.9rem;
    color: #475569;
    margin-bottom: 0.75rem;
}

.dark .why-choose-list li {
    color: #cbd5e1;
}

.why-choose-list span.material-icons-round {
    color: #ffd700;
    font-size: 18px;
    margin-top: 2px;
}

/* Quote */
.why-choose-quote {
    font-style: italic;
    font-weight: 600;
    border-left: 3px solid #ffd700;
    padding-left: 0.75rem;
    margin-top: 0.5rem;
}

/* CTA */
.why-choose-cta {
    margin-top: 4rem;
    display: flex;
    justify-content: center;
}

.why-choose-button {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 2rem;
    border-radius: 999px;
    font-weight: 600;
    background: rgba(255, 255, 255, 0.7);

    backdrop-filter: blur(12px);
    border: 1px solid ;
    cursor: pointer;
    transition: all 0.3s ease;
}

.dark .why-choose-button {
    background: rgba(30, 41, 59, 0.4);
    color: #ffffff;
}

.why-choose-button:hover {
    /* background: #ffd700; */
    background: rgb(253, 255, 186);
    color: #000;
}

</style>
</head>

<body>

<section class="why-choose">

   

    <div class="why-choose-grid">

        <div class="why-choose-card">
            <div class="why-choose-card-header">
                <span class="why-choose-tag">Curriculum</span>
                <div class="why-choose-icon">
                    <span class="material-icons-round">menu_book</span>
                </div>
            </div>
            <h3 class="why-choose-title">Real-world learning. <span>Real impact.</span></h3>
            <div class="why-choose-divider"></div>
            <ul class="why-choose-list">
                <li><span class="material-icons-round">check_circle</span>Skills that match real job roles</li>
                <li><span class="material-icons-round">check_circle</span>Aligned with current tech & hiring</li>
                <li><span class="material-icons-round">check_circle</span>Designed with industry use-cases</li>
                <li class="why-choose-quote">“Learn what the industry actually uses”</li>
            </ul>
        </div>

        <div class="why-choose-card">
            <div class="why-choose-card-header">
                <span class="why-choose-tag">Projects</span>
                <div class="why-choose-icon">
                    <span class="material-icons-round">rocket_launch</span>
                </div>
            </div>
            <h3 class="why-choose-title">Learning by doing — <span>from day one.</span></h3>
            <div class="why-choose-divider"></div>
            <ul class="why-choose-list">
                <li><span class="material-icons-round">check_circle</span>Live guided projects</li>
                <li><span class="material-icons-round">check_circle</span>Real-world problem solving</li>
                <li><span class="material-icons-round">check_circle</span>Portfolio-ready outcomes</li>
                <li class="why-choose-quote">“You don’t just learn it — you build it”</li>
            </ul>
        </div>

        <div class="why-choose-card">
            <div class="why-choose-card-header">
                <span class="why-choose-tag">Mentors</span>
                <div class="why-choose-icon">
                    <span class="material-icons-round">school</span>
                </div>
            </div>
            <h3 class="why-choose-title">Learn from <span>experienced pros.</span></h3>
            <div class="why-choose-divider"></div>
            <ul class="why-choose-list">
                <li><span class="material-icons-round">check_circle</span>Career-oriented guidance</li>
                <li><span class="material-icons-round">check_circle</span>Clear concept explanations</li>
                <li><span class="material-icons-round">check_circle</span>Industry-experienced mentors</li>
                <li class="why-choose-quote">“Learn from people who’ve been there”</li>
            </ul>
        </div>

        <div class="why-choose-card">
            <div class="why-choose-card-header">
                <span class="why-choose-tag">Career</span>
                <div class="why-choose-icon">
                    <span class="material-icons-round">trending_up</span>
                </div>
            </div>
            <h3 class="why-choose-title">Support focused <span>on outcomes.</span></h3>
            <div class="why-choose-divider"></div>
            <ul class="why-choose-list">
                <li><span class="material-icons-round">check_circle</span>Long-term mentoring</li>
                <li><span class="material-icons-round">check_circle</span>Resume & LinkedIn optimization</li>
                <li><span class="material-icons-round">check_circle</span>Interview preparation</li>
                <li class="why-choose-quote">“Success is the final goal”</li>
            </ul>
        </div>

    </div>

    <div class="why-choose-cta">
        <button class="why-choose-button">
            Start Your Journey
            <span class="material-icons-round">arrow_forward</span>
        </button>
    </div>

</section>

</body>

