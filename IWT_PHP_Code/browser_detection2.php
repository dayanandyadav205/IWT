<?php
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

  <h1>PHP Browser Detection 2</h1>
  <?php
  // Echo session variables that were set on previous page
  echo "Welcome: " . $_SESSION["user_name"];
  ?>

  <br><br>

  <a href="logout.php"><input type="submit" value="Logout"></a>


 <?php include '../footer.php'; ?>
</body>

</html>