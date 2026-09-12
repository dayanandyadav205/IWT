<!DOCTYPE html>
<html lang="en">
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

  <h1>PHP Associative Array</h1>
  <?php
  $person = array("name" => "Dayanand Yadav", "city" => "Barwaha");

  // Or using shorthand syntax (PHP 5.4+)
  $capitals = ["India" => "Delhi", "MP" => "Bhopal"];

  echo $person["name"];

  echo $capitals["MP"];
  ?>



  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>

</html>