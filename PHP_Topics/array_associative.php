<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>PHP Arrays</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php include '../include/header.php'; ?>

  <h1>PHP Associative Array</h1>
  <?php
  $person = array("name" => "Dayanand Yadav", "city" => "Barwaha");

  // Or using shorthand syntax (PHP 5.4+)
  $capitals = ["India" => "Delhi", "MP" => "Bhopal"];

  echo $person["name"];

  echo $capitals["MP"];
  ?>



 <?php include '../include/footer.php'; ?>
</body>

</html>