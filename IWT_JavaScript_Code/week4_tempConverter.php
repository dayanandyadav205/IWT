<!DOCTYPE html>
<html lang="en">

<head>
 
</head>

<body>
 <?php include '../header.php'; ?>

  <h1>Day 20: Foreach & Map</h1>
  <h2>Temperature Converter (Celcius to Fehrenheit)</h2><br><br>

  <script>
    let celciusTemp = [4, 12, 20, 30, 40];
    document.writeln("temerature in celcius: " +celciusTemp)
    document.writeln("<br>");
     document.writeln("<br>");

    let ferhrenheit = celciusTemp.map(c => (c * 9 / 5 + 32));
    


    ferhrenheit.forEach((ferhrenheit) => {
      document.writeln("temerature in Ferhenheit: " +ferhrenheit);
        document.writeln("<br>");
    })
  </script>

  <?php include '../footer.php'; ?>
</body>

</html>