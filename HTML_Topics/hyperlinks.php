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
    <meta http-equiv="refresh" content="30">

    <!-- Setting the viewport to make your website look good on all devices: -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyperlink</title>
</head>

<body>
<?php include '../include/header.php'; ?>
    <main>
        <h1>HTML Links - Hyperlinks</h1>
        <ul>
            <li>HTML links are hyperlinks.
            </li>
            <li>You can click on a link and jump to another document.
            </li>
            <li>When you move the mouse over a link, the mouse arrow will turn into a little hand.
            </li>
        </ul>

        <br />
        <h1>Types of Hyperlinks</h1>

        <h3>Internal Links: Internal links point from one page on a website to another page on the same website.
        </h3>
        Internal Link:<a href="\IWT\HTML_Topics\hyperlinks.php"> \IWT\HTML_Topics\hyperlinks.php</a>
       
    

        <h3> External Links: External links (also called outbound links) point from your website to a completely different domain name.
        </h3>
         External Link:<a href="https://github.com/dayanandyadav205">https://github.com/dayanandyadav205</a>
        <h3>Anchor Links: Anchor links (jump links) are special links that send a user to a specific section on the exact same web page
        </h3>
        <h4>Bookmark using Hyperlink (Anchor Link)</h4>
        <p><a href="#C4">Jump to Chapter 4</a></p>
        <p><a href="#C7">Jump to Chapter 7</a></p>

        <h2>Chapter 1</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 2</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 3</h2>
        <p>This chapter explains ba bla bla</p>

        <h2 id="C4">Chapter 4</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 5</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 6</h2>
        <p>This chapter explains ba bla bla</p>

        <h2 id="C7">Chapter 7</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 8</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 9</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 10</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 11</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 12</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 13</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 14</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 15</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 16</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 17</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 18</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 19</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 20</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 21</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 22</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>Chapter 23</h2>
        <p>This chapter explains ba bla bla</p>

        <h2>For more details please refer the Unit-II PPT</h2>
    </main>

    <?php include '../include/footer.php'; ?>
</body>

</html>