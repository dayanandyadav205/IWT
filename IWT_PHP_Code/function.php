<!DOCTYPE html>
<html lang="en">

<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <!-- Load the components script -->
    <script src="/components.js" defer></script>
</head>
<body>

    <!-- Reusable Header Custom Tag -->
    <main-header></main-header>

    <h1>PHP function</h1>
  <?php
  function separator($count)
  {
    echo("<br>");
    for ($i = 0; $i < $count; $i++) {
      echo ("*");
    }
    echo("<br>");
  }
  ?>

  Hello students
  <?php
  separator(50);
  ?>

  This is a lecture on PHP functions
  <?php
  separator(70);
  ?>


  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>

</html>