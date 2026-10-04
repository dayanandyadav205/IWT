<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Conditions</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
 <?php include '../include/header.php'; ?>

  <h1>Switch statement</h1>
  <?php
  $day = date('N');

  switch ($day) {
    case 0:
      echo "Sunday";
      break;

    case 1:
      echo "Monday";
      break;

    case 2:
      echo "Tuesday";
      break;

    case 3:
      echo "Wednesday";
      break;

    case 4:
      echo "Thursday";
      break;

    case 5:
      echo "Friday";
      break;

    case 6:
      echo "Saturday";
      break;
  }
  ?>

  
 <?php include '../include/footer.php'; ?>
</body>

</html>