<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <title>JavaScript DOM Manipulation</title>

</head>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
   <?php include '../include/header.php'; ?>

  <h1>4. JavaScript can add new HTML elements </h1>

  <div id="div1">

  </div>

  <button onclick="myFunction()">Click Here</button>

  <script>
    function myFunction(){
    let node = document.createTextNode("This is new.");

    let para = document.createElement("p").appendChild(node);

    document.getElementById("div1").appendChild(para);

    }
  </script>

  
 <?php include '../include/footer.php'; ?>
</body>

</html>