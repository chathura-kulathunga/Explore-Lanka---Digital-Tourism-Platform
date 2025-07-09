<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Explore Lanka</title>
  <link rel="icon" href="/assets/images/icons/logo.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      background: linear-gradient(270deg,rgb(23, 127, 206),rgb(1, 17, 45),rgb(10, 4, 45));
      background-size: 400% 400%;
      animation: gradient 12s ease infinite;
      padding: 1rem 2rem;
      z-index: 1000;
      transition: padding 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .nav-container {
      max-width: 1200px;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .brand {
      font-size: 1.8rem;
      font-weight: bold;
      color: #fff;
      text-decoration: none;
    }

    /* Typing Effect */
    .typewriter {
      display: inline-block;
      overflow: hidden;
      white-space: nowrap;
      border-right: 3px solid #fff;
      animation: typing 3s steps(20, end) forwards, blink 0.75s step-end 3s;

    }

    @keyframes typing {
      from {
        width: 0;
      }

      to {
        width: 13ch;
      }
    }

    @keyframes blink {

      0%,
      100% {
        border-color: transparent;
      }

      50% {
        border-color: #fff;
      }
    }

    /* Nav links */
    .nav-links {
      display: flex;
      gap: 1.5rem;
      align-items: center;
    }

    .nav-links a,
    .nav-links .dropdown-toggle {
      color: #fff;
      text-decoration: none;
      position: relative;
      transition: 0.3s;
      padding: 6px 10px;
      font-weight: 500;
    }

    .nav-links a:hover,
    .nav-links .dropdown-toggle:hover {
      color: #ffdf00;
      text-shadow: 0 0 10px #ffd700;
    }

    /* Dropdown */
    .dropdown {
      position: relative;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      background: #222;
      display: none;
      flex-direction: column;
      min-width: 150px;
      border-radius: 4px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
      z-index: 10;
    }

    .dropdown-menu a {
      padding: 10px;
      color: #fff;
      text-decoration: none;
    }

    .dropdown-menu a:hover {
      background: #444;
      color: #00ffd5;
    }

    .dropdown:hover .dropdown-menu {
      display: flex;
    }

    /* Hamburger */
    .hamburger {
      display: none;
      font-size: 2rem;
      color: #fff;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .hamburger {
        display: block;
      }

      .nav-links {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #111;
        flex-direction: column;
        display: none;
      }

      .nav-links.show {
        display: flex;
      }

      .nav-links a,
      .dropdown-toggle {
        padding: 1rem;
        text-align: center;
        width: 100%;
      }

      .dropdown-menu {
        position: static;
        box-shadow: none;
        background: #222;
        display: none;
      }

      .dropdown:hover .dropdown-menu {
        display: flex;
      }
    }

    /* Scroll shrink effect */
    .navbar.shrink {
      padding: 0.5rem 2rem;
      background: #111;
    }
  </style>
</head>

<body>
  <header class="navbar">
    <div class="nav-container">
       <img src="/resources/logo.jpg"  width="30" height="30" class="d-inline-block align-text-top">
      <a href="" class="brand"><span class="typewriter">Explore Lanka</span></a>
      <div class="hamburger" id="hamburger">&#9776;</div>
      <nav class="nav-links" id="navLinks">
        <a href="">
          <i class="fas fa-home"></i> Home
        </a>

        <div class="dropdown">
          <a href="" class="dropdown-toggle">
            <i class="fas fa-map-marker-alt"></i> Locations
          </a>
          <div class="dropdown-menu">
            <a href=""><i class="fas fa-location-dot"></i> Kandy</a>
            <a href=""><i class="fas fa-location-dot"></i> Galle</a>
            <a href=""><i class="fas fa-location-dot"></i> Colombo</a>
          </div>
        </div>

        <a href="">
          <i class="fas fa-users"></i> About Us
        </a>
        <a href="">
          <i class="fas fa-phone"></i> Contact
        </a>
      </nav>
    </div>
  </header>


  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const nav = document.querySelector(".navbar");
      const hamburger = document.getElementById("hamburger");
      const navLinks = document.getElementById("navLinks");

      // Toggle mobile nav
      hamburger.addEventListener("click", () => {
        navLinks.classList.toggle("show");
      });

      // Shrink navbar on scroll
      window.addEventListener("scroll", () => {
        nav.classList.toggle("shrink", window.scrollY > 10);
      });

      // Typing effect loop every 15 seconds
      const typewriter = document.querySelector(".typewriter");
      setInterval(() => {
        typewriter.classList.remove("typewriter");
        void typewriter.offsetWidth; // Reflow to restart animation
        typewriter.classList.add("typewriter");
      }, 5000);
    });
  </script>
</body>

</html>