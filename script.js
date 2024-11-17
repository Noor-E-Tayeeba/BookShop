const slides = document.querySelectorAll('#carousel > div');
const nextBtn = document.getElementById('next');
const prevBtn = document.getElementById('prev');

let currentSlide = 0;

function updateSlides() {
  slides.forEach((slide, index) => {
    if (index === currentSlide) {
      slide.setAttribute('data-visible', 'true');
    } else {
      slide.setAttribute('data-visible', 'false');
    }
  });
}

nextBtn.addEventListener('click', () => {
  currentSlide = (currentSlide + 1) % slides.length;
  updateSlides();
});

prevBtn.addEventListener('click', () => {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  updateSlides();
});

// Initialize the first slide properly
updateSlides();
