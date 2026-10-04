<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScript Function</title>

  <script>
    function addition(){
    let n1 = parseFloat(document.getElementById("num1").value);
    let n2 = parseFloat(document.getElementById("num2").value);

    let sum = n1 + n2;

    document.getElementById("demo").innerHTML= "Sum = " +sum;
    }

     function substraction(){
    let n1 = parseFloat(document.getElementById("num1").value);
    let n2 = parseFloat(document.getElementById("num2").value);

    let diff = n1 - n2;

    document.getElementById("demo").innerHTML= "diff = " +diff;
    }
  </script>
</head>

<body>
 <?php include '../include/header.php'; ?>

  <form action="#">
    Num 1:<input type="text" id="num1"><br><br>
    Num 2<input type="text" id="num2">
    <br>
    <button onclick="addition()">+</button>

    <button onclick="substraction()">-</button>

    <p id="demo"></p>
  </form>

 <?php include '../include/footer.php'; ?>

</body>

</html>