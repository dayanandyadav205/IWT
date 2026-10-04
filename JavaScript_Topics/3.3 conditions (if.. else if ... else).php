<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScriptConditions</title>
</head>

<body>
 <?php include '../include/header.php'; ?>

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


    <?php include '../include/footer.php'; ?>
</body>

</html>