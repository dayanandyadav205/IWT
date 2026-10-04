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
    <title>CSS Borders & Boxes</title>

  <style>
    div {
      width: 300px;
      height: auto;
      /* box-sizing: border-box; */
      /* border-width: 5px;
      border-color: red;
      border-style: double;
      border-radius: 20px; */
      border-top: red solid 10px;
      border-right: green dotted 10px;
      border-bottom: blue double 10px;
      border-left: yellow ridge 10px;
      margin:50px;
      padding-top: -50px;

      /* padding-top: 50px;
      padding-right: 50px; */
   
      text-align: justify;
      line-height: 20px;
      /* border-image: url("images/border.png") 30 round; */
      /* box-shadow: 10px 10px lightblue; */
    }
  </style>
</head>

<body>
 <?php include '../include/header.php'; ?>

  <h2>Borders and Boxes</h2>

  <p>CS 504 (A) IWT</p>
  <div>UNIT 03
    <p>Style sheets : Need for CSS, introduction to CSS, basic syntax and structure, using CSS,
      background images, colors and properties, manipulating texts, using fonts, borders and boxes,
      margins, padding lists,positioning using CSS, CSS2, Overview and features of CSS3
      JavaScript : Client side scriptingwith JavaScript, variables, functions, conditions, loops and
      repetition, Pop up boxes, Advance JavaScript: Javascript and objects, JavaScript own objects,
      the DOM and web browser environments, Manipulation using DOM, forms and
      validations, DHTML : Combining HTML, CSS and Javascript, Events and buttons
    aScript : Client side scriptingwith JavaScript, variables, functions, conditions, loops and
      repetition, Pop up boxes, Advance JavaScript: Javascript and objects, JavaScript own objects,
      the DOM and web browser environments, Manipulation using DOM, forms and
      validations, DHTML : Combini
    aScript : Client side scriptingwith JavaScript, variables, functions, conditions, loops and
      repetition, Pop up boxes, Advance JavaScript: Javascript and objects, JavaScript own objects,
      the DOM and web browser environments, Manipulation using DOM, forms and
      validations, DHTML : Combini
    
    aScript : Client side scriptingwith JavaScript, variables, functions, conditions, loops and
      repetition, Pop up boxes, Advance JavaScript: Javascript and objects, JavaScript own objects,
      the DOM and web browser environments, Manipulation using DOM, forms and
      validations, DHTML : Combini</p>
  </div>

   <?php include '../include/footer.php'; ?>
</body>

</html>