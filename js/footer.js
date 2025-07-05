// ==============================================
// Explore Lanka - Footer JS (footer.js)
// ==============================================
// Description: Reveals footer sections smoothly
// using scroll-triggered fade-in animations.
// Uses IntersectionObserver API.

document.addEventListener("DOMContentLoaded", function () {
  // Select all elements that should animate
  const animElements = document.querySelectorAll('.animate');

  // Create an intersection observer instance
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add 'visible' class to trigger animation
        entry.target.classList.add('visible');
      }
    });
  }, {
    threshold: 0.1 // Trigger when 10% of element is visible
  });

  // Observe each animated element
  animElements.forEach(el => observer.observe(el));
});
