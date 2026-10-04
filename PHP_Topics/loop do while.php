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

  <h1>php do while loop</h1>
  <?php
  $i = 10;
  do {
    echo "hello php";
    $i++;
  }
  while ($i <= 5)
  ?>


   <?php include '../include/footer.php'; ?>
</body>

</html>