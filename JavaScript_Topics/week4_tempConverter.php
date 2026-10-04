<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <title>Temperature Conversion using JavaScript</title>
</head>

<body>
 <?php include '../include/header.php'; ?>

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

  <?php include '../include/footer.php'; ?>
</body>

</html>