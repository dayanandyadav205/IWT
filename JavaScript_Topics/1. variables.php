<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JavaScript Variables</title>
</head>

<body>
  <?php include '../include/header.php'; ?>

  <main>
    <h1>JavaScript Variables</h1>
    <p id="demo"></p>

    <script>
      const x = 5;
      let y = 5;
      let sum = x + y;

      document.writeln("sum = ", sum);
      document.getElementById("demo").innerHTML = "sum =" + sum;

      console.log("sum =", sum)

      x = x + 1;
      console.log(x);
    </script>
  </main>
  <?php include '../include/footer.php'; ?>
</body>

</html>