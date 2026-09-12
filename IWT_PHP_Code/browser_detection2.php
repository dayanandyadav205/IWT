<?php
session_start();
?>
<!DOCTYPE html>
<html>
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

  <h1>PHP Browser Detection 2</h1>
  <?php
  // Echo session variables that were set on previous page
  echo "Welcome: " . $_SESSION["user_name"];
  ?>

  <br><br>

  <a href="logout.php"><input type="submit" value="Logout"></a>


  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>

</html>