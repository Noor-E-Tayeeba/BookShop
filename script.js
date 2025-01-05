

// carousel 
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


// popular books
document.querySelectorAll('.tab-button').forEach(button => {
  button.addEventListener('click', () => {
    const tab = button.dataset.tab;

    // Remove "block" and add "hidden" to all tab-content
    document.querySelectorAll('.tab-content').forEach(content => {
      content.classList.add('hidden');
      content.classList.remove('block');
    });

    // Remove "active" class from all buttons
    document.querySelectorAll('.tab-button').forEach(btn => {
      btn.classList.remove('bg-gray-200');
    });

    // Add "block" to the selected tab-content
    document.getElementById(tab).classList.remove('hidden');
    document.getElementById(tab).classList.add('block');

    // Add "active" style to the clicked button
    button.classList.add('bg-gray-200');
  });
});
