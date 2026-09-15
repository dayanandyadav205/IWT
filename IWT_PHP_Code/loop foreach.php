<!DOCTYPE html>
<html lang="en">

<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <?php include '../header.php'; ?>

  <h1>PHP foreach loop</h1>

  <?php
  $cars =array("Maruti", "TATA", "Mahindra");
  foreach($cars as $x){
  echo "$x";
  }
  ?>

  
  <?php include '../footer.php'; ?>
</body>

</html>