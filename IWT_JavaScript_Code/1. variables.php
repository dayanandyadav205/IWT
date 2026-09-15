<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Load the components script -->
    <script src="/scripts/components.js" defer></script>
</head>
<body>
   <!-- Reusable Header Custom Tag -->
    <main-header></main-header>

  <p id="demo"></p>

  <script>
    const x = 5;
    let y = 5;
    let sum =x+y;

    document.writeln("sum = ", sum);
    document.getElementById("demo").innerHTML = "sum =" +sum;

    console.log("sum =", sum)

    x = x+1;
    console.log(x);
  </script>

 <!-- Reusable Footer Custom Tag -->
    <main-footer></main-footer>
</body>
</html>