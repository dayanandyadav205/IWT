<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
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


</body>

</html>