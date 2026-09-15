<!DOCTYPE html>
<html lang="en">

<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
 <?php include '../header.php'; ?>

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

 <?php include '../footer.php'; ?>
</body>

</html>