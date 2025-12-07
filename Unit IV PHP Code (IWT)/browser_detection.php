<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>PHP Browser Detection 1</h1>
  
  <input type="text" placeholder="Enter user name" name="user_name"><br><br>
    <input type="password" placeholder="Enter password"><br><br>

  <button><a href="browser_detection2.php">Login</a></button><br><br>

  <?php
  // Set session variables
  $_SESSION["user_name"] = "dayanand";
  ?>

  </body>

</html>