<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScript DOM Manipulation</title>
</head>

<body>
  <?php include '../include/header.php'; ?>

  <h1>8.1 JavaScript can change all the HTML elements in the page</h1>
  <p id="demo">My Paragraph</p>

  <button onclick='myFunction()'>Click here</button>

  <script>
    function myFunction() {
      document.getElementById("demo").innerHTML = "HelloJavaScript!";
    }
  </script>

  
    <?php include '../include/footer.php'; ?>
</body>

</html>