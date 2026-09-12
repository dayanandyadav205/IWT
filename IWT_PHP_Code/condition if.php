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

  <h1>If Statement</h1>

  <?php
  $age = 20;
  if ($age >= 18) {
    echo "You are eligible to vote.";
  }
  ?>


  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>

</html>