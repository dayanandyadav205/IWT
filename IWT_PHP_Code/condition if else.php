<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
 <?php include '../header.php'; ?>

  <h1>If Else Statement</h1>
  <?php
  $temperature = 25;
  if ($temperature > 30) {
    echo "It's a hot day!";
  } else {
    echo "The weather is moderate.";
  }
  ?>

  
 <?php include '../footer.php'; ?>
</body>

</html>