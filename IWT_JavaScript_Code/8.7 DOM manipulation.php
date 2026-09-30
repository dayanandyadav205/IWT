<!DOCTYPE html>
<html>

<head>
   <title>JavaScript DOM Manipulation</title>

  <style>
    .demoClass{
      color: red;
    }
  </style>
</head>

<body>
 <?php include '../header.php'; ?>

  <h1 class="demoClass">8.7 JavaScript can remove existing attributes</h1>
  <h1 class="demoClass">My Heading</h1>

  <button onclick="removeAtt()">Remove color Attribute</button>

  <script>
    function removeAtt(){
      document.getElementsByTagName("h1")[0].removeAttribute("class");
    }
  </script>

  
 <?php include '../footer.php'; ?>
</body>

</html>