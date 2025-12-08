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

  <a href="browser_detection2.php">Go to another page (browser_detection2.php)</a><br><br>

  <?php
  // Set session variables
  $_SESSION["user_name"] = "dayanand";
  echo "Session variable set";
  ?>

</body>

</html>