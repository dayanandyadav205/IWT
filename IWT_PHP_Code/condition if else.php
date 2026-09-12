<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <!-- Load the components script -->
    <script src="/scripts/components.js" defer></script>
</head>
<body>

    <!-- Reusable Header Custom Tag -->
    <main-header></main-header>

  <h1>If Else Statement</h1>
  <?php
  $temperature = 25;
  if ($temperature > 30) {
    echo "It's a hot day!";
  } else {
    echo "The weather is moderate.";
  }
  ?>

  
  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>

</html>