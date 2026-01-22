console.log('Radar script loaded');
const wrapper = document.querySelector('.project-radar-section');
const scrollContainer = document.querySelector('.project-content-scroll');
const sections = document.querySelectorAll('.project-content-scroll section');
const points = document.querySelectorAll('.project-points circle');
const labels = document.querySelectorAll('.project-labels text');

/* GLOBAL SCROLL CAPTURE */
wrapper.addEventListener(
  'wheel',
  e => {
    e.preventDefault();
    scrollContainer.scrollTop += e.deltaY;
  },
  { passive: false }
);

/* SCROLL → RADAR SYNC */
const observer = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const activeItem = entry.target.dataset.item;

        sections.forEach(s => s.classList.remove('active'));
        entry.target.classList.add('active');

        points.forEach(p =>
          p.classList.toggle('active', p.dataset.item === activeItem)
        );

        labels.forEach((l, i) =>
          l.classList.toggle('active', i + 1 == activeItem)
        );
      }
    });
  },
  {
    root: scrollContainer,
    threshold: 0.6
  }
);

sections.forEach(section => observer.observe(section));