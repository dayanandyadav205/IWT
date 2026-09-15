const container = document.querySelector('.slider-container');
const wrapper = document.querySelector('.slider-wrapper');
const slides = document.querySelectorAll('.slide');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentIndex = 0;

function updateSlider() {
  // Move wrapper to the current slide
  wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
  
  // Adjust height to fit the active image
  const activeImage = slides[currentIndex].querySelector('img');
  if (activeImage && activeImage.clientHeight > 0) {
    container.style.height = `${activeImage.clientHeight}px`;
  }
}

// Click Events
nextBtn.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % slides.length;
  updateSlider();
});

prevBtn.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  updateSlider();
});

// Update height on resize
window.addEventListener('resize', updateSlider);

// Initial setup after images load to calculate correct heights
window.addEventListener('load', updateSlider);
