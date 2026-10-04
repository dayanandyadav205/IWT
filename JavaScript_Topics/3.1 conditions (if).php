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

  <h1>1. JavaScript if</h1>

  <p id="demo1"></p>

  <script>
    let age = 17;
    let text = "You can Not drive!";

    if (age >= 18) {
      text = "You can drive!";
    }

    document.getElementById("demo1").innerHTML = text;
  </script>

 <?php include '../include/footer.php'; ?>
</body>

</html>