console.log('Radar snap controller loaded');

const wrapper = document.querySelector('.project-radar-section');
const track = document.querySelector('.project-content-track'); // wrapper inside scroll
const sections = Array.from(track.children);
const points = document.querySelectorAll('.project-points circle');
const labels = document.querySelectorAll('.project-labels text');

let index = 0;
let isAnimating = false;
const total = sections.length;
const DURATION = 600;

function updateRadar(i) {
  const key = sections[i].dataset.item;

  sections.forEach(s => s.classList.remove('active'));
  sections[i].classList.add('active');

  points.forEach(p =>
    p.classList.toggle('active', p.dataset.item === key)
  );

  labels.forEach((l, idx) =>
    l.classList.toggle('active', idx + 1 == key)
  );
}

function goTo(i) {
  if (i < 0 || i >= total) return;

  isAnimating = true;
  index = i;

  /* PURE TRANSITION — NO SCROLL */
  track.style.transform = `translateY(-${i * 100}%)`;

  setTimeout(() => {
    isAnimating = false;
    updateRadar(i);
  }, DURATION);
}

wrapper.addEventListener(
  'wheel',
  e => {
    if (isAnimating) return;

    const down = e.deltaY > 0;
    const atFirst = index === 0;
    const atLast = index === total - 1;

    /* 🔓 EDGE → PAGE SCROLL */
    if ((atFirst && !down) || (atLast && down)) {
      return;
    }

    /* 🔒 SNAP ONLY */
    e.preventDefault();
    goTo(down ? index + 1 : index - 1);
  },
  { passive: false }
);

/* INIT */
goTo(0);
