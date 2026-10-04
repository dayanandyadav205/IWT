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

  <h1>If Statement</h1>

  <?php
  $age = 20;
  if ($age >= 18) {
    echo "You are eligible to vote.";
  }
  ?>


 <?php include '../include/footer.php'; ?>
</body>

</html>