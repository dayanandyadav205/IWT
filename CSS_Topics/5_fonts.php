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
    <title>CSS Fonts</title>
<style>
h2 {
  font-family:cursive;
}

.p2 {
  font-size: 30px;
  text-transform: capitalize;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.p3 {
  font-family:fantasy;
}

p{
  line-height: 40px;
  font-family: sans-serif;
  text-align: justify;
}
</style>
</head>
<body>
 <?php include '../include/header.php'; ?>

<h1>Using Fonts</h1>
<h2>Chameli Devi Group of Institutions, Indore</h2>
<p class="p2">CS-504 (A) Internet and Web Technology</p>
<p class="p3">Class CS V SEM Section C</p>
 <p>Style sheets : Need for CSS, introduction to CSS, basic syntax and structure, using CSS, 
    background images, colors and properties, manipulating texts, using fonts, borders and boxes, 
    margins, padding lists,positioning using CSS, CSS2, Overview and features of CSS3 
    JavaScript : Client side scriptingwith JavaScript, variables, functions, conditions, loops and 
    repetition, Pop up boxes, Advance JavaScript: Javascript and objects, JavaScript own objects, 
    the DOM and web browser environments, Manipulation using DOM, forms and 
    validations, DHTML : Combining HTML, CSS and Javascript, Events and buttons</p>

    <?php include '../include/footer.php'; ?>
</body>
</html>