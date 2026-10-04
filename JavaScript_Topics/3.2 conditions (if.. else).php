<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScript Conditions</title>
  
</head>

<body>
   <?php include '../include/header.php'; ?>

  <h1>2. JavaScript if .. else</h1>

  <p>A time-based greeting:</p>

  <p id="demo"></p>

  <script>
    const hour = new Date().getHours();
    let greeting;

    if (hour < 18) {
      greeting = "Good day";
    } else {
      greeting = "Good evening";
    }

    document.getElementById("demo").innerHTML = greeting;
  </script>


    <?php include '../include/footer.php'; ?>
</body>

</html>