<!DOCTYPE html>
<html lang="en">

<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <?php include '../header.php'; ?>

  <h1>If Statement</h1>

  <?php
  $age = 20;
  if ($age >= 18) {
    echo "You are eligible to vote.";
  }
  ?>


 <?php include '../footer.php'; ?>
</body>

</html>