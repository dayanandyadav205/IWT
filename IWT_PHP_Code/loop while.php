<!DOCTYPE html>
<html lang="en">

<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
 <?php include '../header.php'; ?>

  <h1>PHP while loop</h1>

  <?php
  $i = 5;
  while ($i <= 10) {
    echo $i;
    $i++;
  }
  ?>

  
 <?php include '../footer.php'; ?>
</body>

</html>