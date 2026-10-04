<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Browser Detection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
 <?php include '../include/header.php'; ?>

  <h1>PHP Browser Detection 1</h1>

  <a href="browser_detection2.php">Go to another page (browser_detection2.php)</a><br><br>

  <?php
  // Set session variables
  $_SESSION["user_name"] = "dayanand";
  echo "Session variable set";
  ?>


 <?php include '../include/footer.php'; ?>
</body>

</html>