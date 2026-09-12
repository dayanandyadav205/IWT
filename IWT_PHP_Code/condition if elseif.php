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
    <h1>php if else</h1>
  <?php
  $marks = 80;
  if ($marks > 70) {
    echo "Grade A";
  } elseif ($marks > 50) {
    echo "Grade B";
  } elseif ($marks > 30) {
    echo "Grade C";
  } else {
    echo "Failed";
  }
  ?>

  
  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>

</html>