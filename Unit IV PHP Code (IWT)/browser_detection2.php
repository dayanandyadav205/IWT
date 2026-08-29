<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>
  <h1>PHP Browser Detection 2</h1>
  <?php
  // Echo session variables that were set on previous page
  echo "Welcome: " . $_SESSION["user_name"];
  ?>

  <br><br>

  <a href="logout.php"><input type="submit" value="Logout"></a>


</body>

</html>