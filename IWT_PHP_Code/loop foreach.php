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

  <h1>PHP foreach loop</h1>

  <?php
  $cars =array("Maruti", "TATA", "Mahindra");
  foreach($cars as $x){
  echo "$x";
  }
  ?>

  
  <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>

</html>