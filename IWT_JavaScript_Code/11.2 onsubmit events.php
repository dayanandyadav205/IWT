<!DOCTYPE html>
<html>
<head>
  

</head>
<head>
  <h1>To check whether Password and Confirm Password match or not</h1>
  <script>
    function validateForm() {
    }
  </script>
</head>

<body>
   <?php include '../header.php'; ?>

  <h2>JavaScript Validation</h2>
  <form action="#" onsubmit="return validateForm()">
    <input type="password" name="password">
    <input type="password" name="cpassword">
    <input type="submit">
    
  </form>

  
    <?php include '../footer.php'; ?>
</body>

</html>
