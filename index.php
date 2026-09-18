<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
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
               <!-- Contact Information -->
        <ul style="list-style: none; padding: 0; line-height: 1.8;">
            <li><strong>My Website:</strong> <a href="https://www.iwt5.in" target="_blank">www.iwt5.in</a></li>
            <li><strong>Personal Mail 1:</strong> <a href="mailto:dayanand.yadav@iwt5.in">dayanand.yadav@iwt5.in</a></li>
            <li><strong>Personal Mail 2:</strong> <a href="mailto:dayanandyadav205@gmail.com">dayanandyadav205@gmail.com</a></li>
            <li><strong>Official Mail:</strong> <a href="mailto:dayanand.yadav@cdgi.edu.in">dayanand.yadav@cdgi.edu.in</a></li>
            <li><strong>Mobile:</strong> <a href="tel:09926079083">099260-79083</a></li>
        </ul>
            </div>
       </div>

    </aside>

  </div>

  <!-- Link to your JavaScript file -->
  <script src="scripts/slider.js"></script>

    <?php include 'footer.php'; ?>
</body>
</html>
