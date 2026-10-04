<!DOCTYPE html>
<html>
<head>
  <title>JavaScript DOM Manipulation</title>

</head>
<body>
 <?php include '../include/header.php'; ?>

  <h1>8.6 JavaScript can add new HTML attributes</h1>
  <h2>The setAttribute() Method</h2>

  <p>Tick the checkbox to change the input field to a text</p>
  <input type="password" id="myInput"> 
  <input type="checkbox" onclick="myFunction()">

  <script>
    function myFunction() {
      document.getElementById("myInput").setAttribute("type", "text");
    }
  </script>

  
    <?php include '../include/footer.php'; ?>
</body>

</html>