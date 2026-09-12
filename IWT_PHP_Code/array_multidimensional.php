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

<h1>PHP - Multidimensional Array</h1>
<?php

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>


  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>
</html>