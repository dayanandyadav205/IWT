<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Loops</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
 <?php include '../include/header.php'; ?>

  <h1>PHP while loop</h1>

  <?php
  $i = 5;
  while ($i <= 10) {
    echo $i;
    $i++;
  }
  ?>

  
 <?php include '../include/footer.php'; ?>
</body>

</html>