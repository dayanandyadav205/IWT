<!DOCTYPE html>
<html>

<head>
  <!-- UTF-8 stands for Unicode Transformation Format – 8-bit. Unicode: A universal library that assigns a unique number (called a code point) to nearly every character, symbol, and emoji in all world languages. -->
    <meta charset="UTF-8">

    <!-- Define a description of your web page: -->
    <meta name="description" content="IWT5 is an educational web development and programming resource platform created by Dayanand Yadav, an Assistant Professor in the Computer Science & Engineering Department at Chameli Devi Group of Institutions (CDGI) in Indore, India.">

    <!-- Define keywords for search engines: -->
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL">

    <!-- Define the author of a page: -->
    <meta name="author" content="Dayanand Yadav">

    <!-- Refresh document every 30 seconds: -->
    <meta http-equiv="refresh" content="30">

    <!-- Setting the viewport to make your website look good on all devices: -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Text Properties</title>
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
 <?php include '../include/header.php'; ?>

  <div>
    <h1>Manipulating texts</h1>
    <p>This text is styled with some of the text formatting properties. The heading uses the text-align, text-transform,
      and color properties.The paragraph is indented, aligned, and the space between characters is specified. The
      underline is removed from this colored</p>

      <button id="btn">Click here</button>
  </div>

 <?php include '../include/footer.php'; ?>
</body>

</html>