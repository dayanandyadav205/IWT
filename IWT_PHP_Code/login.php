<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <!-- Load the components script -->
    <script src="/components.js" defer></script>
</head>
<body>

    <!-- Reusable Header Custom Tag -->
    <main-header></main-header>

  <h1>Page 1</h1>



  <?php
  // Set session variables
  $_SESSION["email"] = "email";
  ?>


  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>

</html>