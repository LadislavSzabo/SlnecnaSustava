let slideIndex = 0;
const slides = document.querySelectorAll('.riadok');
const totalSlides = slides.length;

function showSlide(index) {
  slides.forEach(slide => {
    slide.style.display = 'none';
  });
  slides[index].style.display = 'block';
}

function nextSlide() {
  if (slideIndex < totalSlides - 1) {
    slideIndex++;
  } else {
    slideIndex = 0;
  }
  showSlide(slideIndex);
}

function prevSlide() {
  if (slideIndex > 0) {
    slideIndex--;
  } else {
    slideIndex = totalSlides - 1;
  }
  showSlide(slideIndex);
}  // Initial display of the first slide
showSlide(slideIndex);

// Attach functions to global scope for navigation
window.nextSlide = nextSlide;
window.prevSlide = prevSlide;