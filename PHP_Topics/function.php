<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Functions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
 <?php include '../include/header.php'; ?>

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

 <?php include '../include/footer.php'; ?>
</body>

</html>