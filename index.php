<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <!-- Link to your CSS file -->
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <!-- Main Content Wrapper -->
  <div class="content">
    
    <!-- 1. MAIN AREA (Contains the Slider) -->
    <main class="main">
      <div class="slider">
        
        <!-- Image Container -->
        <div class="img-box">
          <img class="slider-img" src="images/1.jpg" alt="Slider Image">
        </div>
        
        <!-- Slider Controls -->
        <div style="text-align: center;">
          <button class="btn" onclick="prev()">Previous</button>
          <button class="btn" onclick="next()">Next</button>
        </div>

      </div>
    </main>

    <!-- 2. ASIDE AREA (Sidebar) -->
    <aside class="aside">
      
      <!-- About Me Card -->
      <div class="aboutMe">
        <p class="title">Developer's Profile</p>
            <!-- 1. Header & Photo -->
            <img src="/images/dayanand.jpg" alt="Dayanand Yadav" class="profile-avatar">
            <h3>Dayanand Yadav</h3>
            <p class="title">Assistant Professor</p>
            <p class="institution">Computer Science & Engineering Department</p>
            <p class="institution">Chameli Devi Group of Institutions, Indore</p>

            <!-- 2. Contact Details -->
            <div class="profile-details">
                <p><strong>Personal Mail:</strong> dayanandyadav205@gmail.com</p>
                <p><strong>Official Mail:</strong> dayanand.yadav@cdgi.edu.in</p>
                <p><strong>Mobile:</strong> 099260-79083</p>
            </div>

      <!-- Links Card -->
      <div class="myLinks">
        <h3>Connect With Me</h3>
        <div class="link-buttons">
            <!-- GitHub Icon -->
            <a href="https://github.com/dayanandyadav205" target="_blank" title="GitHub">
              <i class="fa-brands fa-github"></i>
            </a>
            
            <!-- LinkedIn Icon -->
            <a href="https://www.linkedin.com/in/dayanandyadav205/" target="_blank" title="LinkedIn">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
      </div>

    </aside>

  </div>

  <!-- Link to your JavaScript file -->
  <script src="scripts/slider.js"></script>

    <?php include 'footer.php'; ?>
</body>
</html>
