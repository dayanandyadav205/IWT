<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
   <meta charset="UTF-8">>
  <style>
    div {
      border: 1px solid gray;
      padding: 8px;
    }

    h1 {
      text-align: center;
      text-transform: uppercase;
      color: #4CAF50;
    }

    p {
      text-indent: 50px;
      text-align: justify;
      letter-spacing: 3px;
    }

    #btn:hover{
      background-color: #4CAF50;
    transform: scaleY(2);
    }
  </style>

</head>

<body>
 <?php include '../header.php'; ?>

  <div>
    <h1>Manipulating texts</h1>
    <p>This text is styled with some of the text formatting properties. The heading uses the text-align, text-transform,
      and color properties.The paragraph is indented, aligned, and the space between characters is specified. The
      underline is removed from this colored</p>

      <button id="btn">Click here</button>
  </div>

 <?php include '../footer.php'; ?>
</body>

</html>