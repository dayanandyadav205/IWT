<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/index.css">
  <!-- Added Font Awesome for social and resource icons to display correctly -->
  <link rel="stylesheet" href="https://cloudflare.com">
  <script src="/scripts/slider.js" defer></script>
</head>

<body id="home-layout">
   <?php include 'header.php'; ?>

  <!-- The flexible grid (content) -->
  <div class="content">
    <div class="main">
    <div class="slider-container">
  <div class="slider-wrapper">
    <div class="slide"><img src="/images/1.jpg" alt="Slide 1"></div>
    <div class="slide"><img src="/images/2.jpg" alt="Slide 2"></div>
    <div class="slide"><img src="/images/3.jpg" alt="Slide 3"></div>
    <div class="slide"><img src="/images/4.jpg" alt="Slide 4"></div>
    <div class="slide"><img src="/images/5.jpg" alt="Slide 5"></div>
  </div>
  <button class="btn prev-btn" aria-label="Previous slide">❮</button>
  <button class="btn next-btn" aria-label="Next slide">❯</button>
</div>
</div>


    <div class="aside">
      <!-- About Me Card -->
      <div class="aboutMe">
        <div class="myImg">
          <img src="/images/dayanand.jpg" alt="Dayanand Yadav Picture" />
        </div>
        <div class="myIntro">
          <h3>About Me</h3>
          <p>I am Dayanand Yadav, working as an Assistant Professor in Computer Science & Engineering Department in Chameli Devi Group of Institutions, Indore.</p>
        </div>
      </div>

      <!-- Social & Resource Links Card -->
      <div class="myLinks">
        <h3>My Links</h3>
        <div class="link-buttons">
          <a href="https://github.com/dayanandyadav205/CRT" target="_blank" aria-label="GitHub">
            <i class="fa-brands fa-github"></i>
          </a>
          <a href="https://www.linkedin.com/in/dayanandyadav205" target="_blank" aria-label="LinkedIn">
            <i class="fa-brands fa-linkedin"></i>
          </a>
          <a href="https://www.w3.org/" target="_blank" aria-label="W3C">
            <i class="fa-brands fa-w3c"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>