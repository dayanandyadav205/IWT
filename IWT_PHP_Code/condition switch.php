<!DOCTYPE html>
<html lang="en">

<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <!-- Load the components script -->
    <script src="/components.js" defer></script>
</head>
<body>

    <!-- Reusable Header Custom Tag -->
    <main-header></main-header>

  <h1>Switch statement</h1>
  <?php
  $day = date('N');

  switch ($day) {
    case 0:
      echo "Sunday";
      break;

    case 1:
      echo "Monday";
      break;

    case 2:
      echo "Tuesday";
      break;

    case 3:
      echo "Wednesday";
      break;

    case 4:
      echo "Thursday";
      break;

    case 5:
      echo "Friday";
      break;

    case 6:
      echo "Saturday";
      break;
  }
  ?>

  
  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>

</html>