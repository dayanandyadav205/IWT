<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

    <?php include '../header.php'; ?>

  <h1>PHP Associative Array</h1>
  <?php
  $person = array("name" => "Dayanand Yadav", "city" => "Barwaha");

  // Or using shorthand syntax (PHP 5.4+)
  $capitals = ["India" => "Delhi", "MP" => "Bhopal"];

  echo $person["name"];

  echo $capitals["MP"];
  ?>



 <?php include '../footer.php'; ?>
</body>

</html>