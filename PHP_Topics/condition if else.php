<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>PHP Conditions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
 <?php include '../include/header.php'; ?>

  <h1>If Else Statement</h1>
  <?php
  $temperature = 25;
  if ($temperature > 30) {
    echo "It's a hot day!";
  } else {
    echo "The weather is moderate.";
  }
  ?>

  
 <?php include '../include/footer.php'; ?>
</body>

</html>