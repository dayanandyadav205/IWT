<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="1">
  <title>JavaScript Own Objects</title>
</head>

<body>
  <?php include '../include/header.php'; ?>

  <h1>JavaScript time Objects</h1>
  <div id="demo"></div>
  <script>
    var time = new Date();
    var hh = time.getHours();
    var min = time.getMinutes();
    var ss = time.getSeconds();
    document.getElementById("demo").innerHTML = "Current Time: " + hh + ":" + min + ":" + ss;
  </script>

 <?php include '../include/footer.php'; ?>
</body>

</html>