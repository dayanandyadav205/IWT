<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
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
</body>

</html>