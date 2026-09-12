<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <!-- Load the components script -->
   <script src="/scripts/components.js" defer></script>
</head>
<body>

    <!-- Reusable Header Custom Tag -->
    <main-header></main-header>

  <h1>PHP Browser Detection 1</h1>

  <a href="browser_detection2.php">Go to another page (browser_detection2.php)</a><br><br>

  <?php
  // Set session variables
  $_SESSION["user_name"] = "dayanand";
  echo "Session variable set";
  ?>


  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>

</html>