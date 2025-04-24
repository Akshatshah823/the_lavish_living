<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lavish Living - Premium Lifestyle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    /* General Reset & Variables */
    :root {
      --primary: #2a2d38;
      --secondary: #3a3f51;
      --accent: #c19a6b;
      --light: #f8f8f8;
      --text: #333333;
      --text-light: #777777;
      --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
      --shadow: 0 15px 30px rgba(0,0,0,0.1);
      --radius: 8px;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    html {
      scroll-behavior: smooth;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      color: var(--text);
      background-color: #ffffff;
      line-height: 1.6;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      overflow-x: hidden;
    }
    
    h1, h2, h3, h4 {
      font-family: 'Playfair Display', serif;
      font-weight: 600;
    }
    
    a {
      text-decoration: none;
      color: inherit;
      transition: var(--transition);
    }
    
    ul {
      list-style: none;
    }
    
    img {
      max-width: 100%;
      height: auto;
    }
    
    /* Layout & Containers */
    .container {
      width: 100%;
      max-width: 1750px;
      margin: 0 auto;
      padding: 0;
    }
    
    .content {
      flex: 1;
      padding: 60px 0;
    }
    
    /* Header - Modern Sticky Navigation */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.95);
      box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
      z-index: 1000;
      transition: var(--transition);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }
    
    header.scrolled {
      background-color: rgba(255, 255, 255, 0.98);
      box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
      padding: 10px 0;
    }
    
    .header-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 20px;
      transition: var(--transition);
    }
    
    header.scrolled .header-container {
      padding: 5px 20px;
    }
    
    .logo {
      display: flex;
      align-items: center;
      font-size: 24px;
      font-weight: 700;
      color: var(--primary);
      letter-spacing: 1px;
    }
    
    .logo img {
      height: 40px;
      margin-right: 12px;
      transition: var(--transition);
    }
    
    header.scrolled .logo img {
      height: 35px;
    }
    
    nav {
      display: flex;
      align-items: center;
      gap: 30px;
    }
    
    nav a {
      position: relative;
      font-size: 15px;
      font-weight: 500;
      color: var(--text);
      padding: 5px 0;
      letter-spacing: 0.5px;
    }
    
    nav a::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background-color: var(--accent);
      transition: var(--transition);
    }
    
    nav a:hover::after,
    nav a.active::after {
      width: 100%;
    }
    
    .nav-cta {
      background-color: var(--accent);
      color: white;
      padding: 10px 25px;
      border-radius: 30px;
      font-weight: 600;
      box-shadow: 0 4px 15px rgba(194, 154, 107, 0.3);
    }
    
    .nav-cta:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(194, 154, 107, 0.4);
    }
    
    .menu-toggle {
      display: none;
      font-size: 24px;
      color: var(--primary);
      cursor: pointer;
      z-index: 1001;
    }
    
    /* Hero Section - Modified */
    .hero {
      height: 100vh;
      min-height: 700px;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      background-color: #f5f5f5;
      color: var(--text);
      position: relative;
      overflow: hidden;
      padding: 0 20px;
    }
    
    .hero-content {
      max-width: 600px;
      transform: translateY(30px);
      opacity: 0;
      animation: fadeUp 1s ease forwards 0.3s;
      text-align: right;
      margin-right: 20px;
    }
    
    @keyframes fadeUp {
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }
    
    .hero h1 {
      font-size: 56px;
      line-height: 1.2;
      margin-bottom: 20px;
    }
    
    .hero p {
      font-size: 18px;
      margin-bottom: 30px;
      color: var(--text-light);
    }
    
    .hero-btn {
      display: inline-block;
      background-color: var(--accent);
      color: white;
      padding: 15px 35px;
      border-radius: 30px;
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: uppercase;
      font-size: 14px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      transition: var(--transition);
      float: right;
    }
    
    .hero-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }
    
    /* Footer - Elegant Design */
    .footer {
      background-color: var(--primary);
      color: white;
      padding: 80px 0 30px;
      position: relative;
    }
    
    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 10px;
      background: linear-gradient(to right, var(--accent), #d4b38b);
    }
    
    .footer-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 40px;
      margin-bottom: 60px;
      padding: 0 20px;
    }
    
    .footer-col {
      position: relative;
    }
    
    .footer-col h4 {
      font-size: 18px;
      margin-bottom: 25px;
      position: relative;
      padding-bottom: 10px;
    }
    
    .footer-col h4::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 40px;
      height: 2px;
      background-color: var(--accent);
    }
    
    .footer-col ul li {
      margin-bottom: 12px;
    }
    
    .footer-col ul li a {
      color: #bbbbbb;
      font-size: 15px;
      transition: var(--transition);
      display: inline-block;
    }
    
    .footer-col ul li a:hover {
      color: white;
      transform: translateX(5px);
    }
    
    .footer-logo {
      max-width: 180px;
      margin-bottom: 20px;
      opacity: 0.9;
      transition: var(--transition);
    }
    
    .footer-logo:hover {
      opacity: 1;
      transform: scale(1.05);
    }
    
    .social-links {
      display: flex;
      gap: 15px;
      margin-top: 20px;
    }
    
    .social-links a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      color: white;
      transition: var(--transition);
    }
    
    .social-links a:hover {
      background-color: var(--accent);
      transform: translateY(-3px);
    }
    
    .footer-bottom {
      text-align: center;
      padding-top: 30px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      color: #bbbbbb;
      font-size: 14px;
      padding: 0 20px;
    }
    
    /* Newsletter Form */
    .newsletter {
      margin-top: 20px;
    }
    
    .newsletter input {
      width: 100%;
      padding: 12px 15px;
      background-color: rgba(255, 255, 255, 0.1);
      border: none;
      border-radius: 4px;
      color: white;
      margin-bottom: 10px;
    }
    
    .newsletter input::placeholder {
      color: #bbbbbb;
    }
    
    .newsletter button {
      background-color: var(--accent);
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-weight: 600;
      width: 100%;
      transition: var(--transition);
    }
    
    .newsletter button:hover {
      background-color: #d4a76a;
      transform: translateY(-2px);
    }
    
    /* Back to Top Button */
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background-color: var(--accent);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
      opacity: 0;
      visibility: hidden;
      transition: var(--transition);
      z-index: 999;
    }
    
    .back-to-top.active {
      opacity: 1;
      visibility: visible;
    }
    
    .back-to-top:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }
    /* contact us pop up */
    .contact-button {
      padding: 10px 20px;
      background-color: #28a745;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
    }

    /* The popup */
    .popup-overlay {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.6);
      justify-content: center;
      align-items: center;
    }

    .popup-content {
      background: #fff;
      padding: 20px 30px;
      border-radius: 8px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .popup-content h3 {
      margin-bottom: 15px;
    }

    .call-icon {
      font-size: 28px;
      color: #28a745;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-top: 10px;
    }

    .close-popup {
      margin-top: 15px;
      background: #ccc;
      border: none;
      padding: 8px 16px;
      cursor: pointer;
      border-radius: 5px;
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
      .hero h1 {
        font-size: 48px;
      }
    }
    
    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }
      
      nav {
        position: fixed;
        top: 0;
        right: -100%;
        width: 300px;
        height: 100vh;
        background-color: white;
        flex-direction: column;
        align-items: flex-start;
        padding: 80px 30px;
        box-shadow: -5px 0 30px rgba(0, 0, 0, 0.1);
        transition: var(--transition);
      }
      
      nav.active {
        right: 0;
      }
      
      nav a {
        padding: 12px 0;
        font-size: 16px;
        color: var(--text);
      }
      
      .hero h1 {
        font-size: 40px;
      }
      
      .hero p {
        font-size: 16px;
      }
      
      .hero-content {
        text-align: center;
        margin-right: 0;
      }
      
      .hero-btn {
        float: none;
      }
      
      .footer-container {
        grid-template-columns: 1fr;
      }
    }
    
    @media (max-width: 576px) {
      .hero {
        min-height: 600px;
      }
      
      .hero h1 {
        font-size: 32px;
      }
      
      .hero-btn {
        padding: 12px 25px;
      }
      
      .logo {
        font-size: 20px;
      }
      
      .logo img {
        height: 30px;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header id="header">
    <div class="container">
      <div class="header-container">
        <a href="#" class="logo">
          <img src="Images/logo.png" alt="Lavish Living Logo">
         The Lavish Living
        </a>
        <i class="fas fa-bars menu-toggle" id="menu-toggle"></i>
        <nav id="navbar">
          <a href="#" class="active">Home</a>
          <a href="about.html">About</a>
          <a href="services.html">Services</a>
          <a href="#">Portfolio</a>
          <a href="#">Blog</a>
          <button class="nav-cta" onclick="openPopup()">Contact Us</button>


        </nav>
      </div>
    </div>
  </header>
  
  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Elevate Your Living Experience</h1>
        <p>Discover unparalleled luxury and sophistication in every detail of our premium residential properties and lifestyle services.</p>
        <a href="#" class="hero-btn">Explore Properties</a>
        
      </div>
    </div>
  </section>

  <!-- Content -->
  <div class="content">
    <!-- Content sections would go here -->
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-col">
          <img src="Images/logo.png" alt="Lavish Living Logo" class="footer-logo">
          <p style="color: #bbbbbb; margin-bottom: 20px;">Redefining luxury living through exceptional design and unparalleled service.</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
          </div>
        </div>
        
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Properties</a></li>
            <li><a href="#">Testimonials</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="#">Alkapuri</a></li>
            <li><a href="#">Chakli Circle</a></li>
            <li><a href="#">Uma Char Rasta</a></li>
            <li><a href="#">Waghodiya</a></li>
            <li><a href="#">Jetalpur</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>Newsletter</h4>
          <p style="color: #bbbbbb; margin-bottom: 20px;">Subscribe to our newsletter for the latest updates and offers.</p>
          <div class="newsletter">
            <input type="email" placeholder="Your Email Address">
            <button type="submit">Subscribe</button>
          </div>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2025 The Lavish Living. All Rights Reserved. | Designed with <i class="fas fa-heart" style="color: #e91e63;"></i> by The Lavish Living Team</p>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <a href="#" class="back-to-top" id="back-to-top"><i class="fas fa-arrow-up"></i></a>
<!-- Popup Structure -->
<div id="callPopup" class="popup-overlay">
  <div class="popup-content">
    <h3>Call Us</h3>
    <a href="tel:+12345678901" class="call-icon">
      📞 +91 8239239550
    </a>
    <br>
    <button class="close-popup" onclick="closePopup()">Close</button>
  </div>
</div>
  <!-- Scripts -->
  <script>
//pop up  for contact us 
function openPopup() {
      document.getElementById('callPopup').style.display = 'flex';
    }

    function closePopup() {
      document.getElementById('callPopup').style.display = 'none';
    }
    // Mobile Menu Toggle
    const toggle = document.getElementById('menu-toggle');
    const nav = document.getElementById('navbar');
    toggle.addEventListener('click', () => {
      nav.classList.toggle('active');
      toggle.classList.toggle('fa-times');
    });
    
    // Close mobile menu when clicking a link
    document.querySelectorAll('#navbar a').forEach(link => {
      link.addEventListener('click', () => {
        nav.classList.remove('active');
        toggle.classList.remove('fa-times');
      });
    });
    
    // Header scroll effect
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 100) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
      
      // Back to top button
      const backToTop = document.getElementById('back-to-top');
      if (window.scrollY > 300) {
        backToTop.classList.add('active');
      } else {
        backToTop.classList.remove('active');
      }
    });
  </script>

</body>
</html>