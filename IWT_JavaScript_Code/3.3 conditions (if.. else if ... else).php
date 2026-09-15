<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
 <?php include '../header.php'; ?>

  <h1>3. if...else if...else</h1>

  <p>A time-based greeting:</p>

  <p id="demo"></p>

  <script>
    const time = new Date().getHours();
    let greeting;
    if (time < 10) {
      greeting = "Good morning";
    } else if (time < 20) {
      greeting = "Good afernoon";
    } else {
      greeting = "Good evening";
    }
    document.getElementById("demo").innerHTML = greeting;
  </script>


    <?php include '../footer.php'; ?>
</body>

</html>