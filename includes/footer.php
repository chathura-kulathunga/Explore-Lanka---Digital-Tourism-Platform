<?php
// ============================
// Explore Lanka - Footer File
// ============================
// Description: This PHP footer includes responsive design using Bootstrap,
// smooth scroll-triggered animations via footer.js, and organized content
// including About, Quick Links, Contact, and Social sections.
?>

<!-- Link Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Link footer-specific CSS file -->
<link rel="stylesheet" href="/css/footer.css">

<footer class="footer bg-dark text-light pt-5 pb-3">
  <div class="container">
    <div class="row text-center text-md-start g-4">

      <!-- About Section -->
      <div class="col-md-3 animate fade-in delay-0">
        <h5 class="text-uppercase mb-3 fw-bold text-info">Explore Lanka</h5>
        <p class="small">Your trusted digital tourism guide for exploring the beauty of Sri Lanka.</p>
      </div>

      <!-- Quick Links Section -->
      <div class="col-md-3 animate fade-in delay-1">
        <h5 class="text-uppercase mb-3 fw-bold text-info">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="/index.html" class="text-light text-decoration-none">Home</a></li>
          <li><a href="/about.html" class="text-light text-decoration-none">About</a></li>
          <li><a href="/contact.html" class="text-light text-decoration-none">Contact</a></li>
          <li><a href="/locations/central/kandy/kandy.html" class="text-light text-decoration-none">Explore Locations</a></li>
        </ul>
      </div>

      <!-- Contact Info Section -->
      <div class="col-md-3 animate fade-in delay-2">
        <h5 class="text-uppercase mb-3 fw-bold text-info">Contact Us</h5>
        <p class="mb-1">📧 info@explorelanka.lk</p>
        <p class="mb-1">📞 +94 77 123 4567</p>
        <p class="mb-0">📷 @explorelanka.lk</p>
      </div>

      <!-- Social Media Icons Section -->
      <div class="col-md-3 animate fade-in delay-3">
        <h5 class="text-uppercase mb-3 fw-bold text-info">Follow Us</h5>
        <div class="d-flex justify-content-center justify-content-md-start gap-3">
          <a href="#"><img src="/assets/icons/facebook.svg" alt="Facebook" width="28" class="social-icon"></a>
          <a href="#"><img src="/assets/icons/instagram.svg" alt="Instagram" width="28" class="social-icon"></a>
          <a href="#"><img src="/assets/icons/youtube.svg" alt="YouTube" width="28" class="social-icon"></a>
          <a href="#"><img src="/assets/icons/tiktok.svg" alt="TikTok" width="28" class="social-icon"></a>
        </div>
      </div>

    </div>
    <hr class="bg-secondary mt-5">

    <!-- Footer Bottom Text -->
    <div class="text-center animate fade-in delay-4">
      <p class="mb-0 small">&copy; 2025 Explore Lanka. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- Load Footer Animation Script -->
<script src="/js/footer.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-HoA8h5hZ4nXYo8wE2qgUcYj1xUNvG+dBPnErLZK2JdOfVFLn6S9EvpxiRjI5fV6X" crossorigin="anonymous"></script>
