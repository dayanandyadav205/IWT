<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
    <!-- <meta http-equiv="refresh" content="30"> -->

    <!-- Setting the viewport to make your website look good on all devices: -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XHTML</title>
</head>

<body>
<?php include '../include/header.php'; ?>

    <main>
        <h1>XHTML Elements Must be Properly Nested</h1>
        Correct:
        <b><i>Some text</i></b>

        <br />

        Wrong:
        <b><i>Some text</b></i>

        <hr /><br />

        <h1>XHTML Elements Must Always be Closed</h1>
        Correct:
        <p>This is a paragraph</p>
        <p>This is another paragraph</p>

        <br />

        Wrong:
        <p>This is a paragraph
        <p>This is another paragraph

            <hr /><br />


        <h1>XHTML Empty Elements Must Always be Closed</h1>
       
        Correct: <br />
        <img src="/IWT/images/smily.gif" alt="Happy face" />

        <br />

        Wrong: <br />
        <img src="/IWT/images/smily.gif" alt="Happy face">

        <hr /><br />


        <h1>XHTML Elements Must be in Lowercase</h1>
        
        Correct:

        <body>
            <p>This is a paragraph</p>
        </body>

        <br />

        Wrong:

        <BODY>
            <P>This is a paragraph</P>
        </BODY>

        <hr /><br />

        <h1>XHTML Attribute Names Must be in Lowercase</h1>
        

        Correct:
        <a href="https://www.w3schools.com/html/">Visit our HTML tutorial</a>
        Wrong:
        <a HREF="https://www.w3schools.com/html/">Visit our HTML tutorial</a>
        XHTML Attribute Values Must be Quoted
       

        <br />

        Correct:
        <a href="https://www.w3schools.com/html/">Visit our HTML tutorial</a>
        Wrong:
        <a href=https://www.w3schools.com/html />Visit our HTML tutorial</a>

        <hr /><br />

        <h1>XHTML Attribute Minimization is Forbidden</h1>

        Correct:
        <input type="checkbox" name="vehicle" value="car" checked="checked" />
        <input type="text" name="lastname" disabled="disabled" />

        <br />

        Wrong:
        <input type="checkbox" name="vehicle" value="car" checked />
        <input type="text" name="lastname" disabled />

        <hr /><br />
        <h2>For more details please refer the Unit-II PPT</h2>
    </main>




    <?php include '../include/footer.php'; ?>
</body>

</html>