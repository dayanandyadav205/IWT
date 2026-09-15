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
  
</head>
<body>
 <?php include '../header.php'; ?>

  <h1>Page 1</h1>



  <?php
  // Set session variables
  $_SESSION["email"] = "email";
  ?>


   <?php include '../footer.php'; ?>
</body>

</html>