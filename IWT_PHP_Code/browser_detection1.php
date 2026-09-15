<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
 <?php include '../header.php'; ?>

  <h1>PHP Browser Detection 1</h1>

  <a href="browser_detection2.php">Go to another page (browser_detection2.php)</a><br><br>

  <?php
  // Set session variables
  $_SESSION["user_name"] = "dayanand";
  echo "Session variable set";
  ?>


 <?php include '../footer.php'; ?>
</body>

</html>