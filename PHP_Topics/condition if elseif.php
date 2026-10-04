<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>PHP Conditions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <?php include '../include/header.php'; ?>

    <h1>php if else</h1>
  <?php
  $marks = 80;
  if ($marks > 70) {
    echo "Grade A";
  } elseif ($marks > 50) {
    echo "Grade B";
  } elseif ($marks > 30) {
    echo "Grade C";
  } else {
    echo "Failed";
  }
  ?>

  

 <?php include '../include/footer.php'; ?>
</body>

</html>