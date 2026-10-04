<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
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
    <title>CSS Selectors</title>

    <style>
         h1{
            background-color: red;
            color: white;
        }

        p{
            color: navy;
        }

        #p3{
            color: red;
        }

        .p5{
            color:#ff9900;
        }

        input[type="text"]{
            background-color: red;
            color:white;
        }

        input[type="submit"]:hover{
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
 <?php include '../include/header.php'; ?>

    <h1>CSS Element Selector</h1>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, eveniet?</p>
    
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, eveniet?</p>
    
    <p id="p3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, eveniet?</p>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, eveniet?</p>
    
    <p class="p5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, eveniet?</p>
    
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, eveniet?</p>

    <form>
        <input type="text" placeholder="User Name"><br/><br/>
        <input type="password" placeholder="password"><br/> <br/>

        <input type="submit" name="submit">
    </form>

   <?php include '../include/footer.php'; ?>
</body>
</html>