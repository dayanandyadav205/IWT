<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>PHP Associative Array</h1>
  <?php
  $person = array("name" => "Dayanand Yadav", "city" => "Barwaha");

  // Or using shorthand syntax (PHP 5.4+)
  $capitals = ["India" => "Delhi", "MP" => "Bhopal"];

  echo $person["name"];

  echo $capitals["MP"];
  ?>

</body>

</html>