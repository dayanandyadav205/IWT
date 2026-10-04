<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <meta charset="UTF-8">
  <title>JavaScript DHTML Example</title>

  <style>
    #message {
      color: blue;
      font-size: 20px;
    }
  </style>
  <script>
    function changeContent() {
      document.getElementById('message').innerHTML = 'Hello, Dynamic HTML!';
      document.getElementById('message').style.color = 'red';
    }
  </script>
</head>
<body>
 <?php include '../include/header.php'; ?>

  <h1>Introduction to DHTML</h1>
  <p id="message">This is a static message.</p>
  <button onclick="changeContent()">Change Content</button>

  
    <?php include '../include/footer.php'; ?>
</body>
</html>