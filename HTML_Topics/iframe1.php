<!DOCTYPE html>
<html lang="en">

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
    <title>HTML character entities</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php include '../include/header.php'; ?>

    <main>
       <h1>iframe Example-1</h1>
        <h2>CDGI on Google Map</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2642.3867536361213!2d75.88653547530167!3d22.615117879461543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fb28a5660d8b%3A0x2a7a0698a930c80f!2sChameli%20Devi%20Group%20of%20Institutions!5e1!3m2!1sen!2sin!4v1758175120964!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy“ referrerpolicy=" no-referrer-when-downgrade"></iframe>


        <p>Example: Use the <iframe> tag to embed youtube video on your web page:</p>

        <iframe width="560"
            height="315"
            src="https://www.youtube.com/embed/qP23O70ve7k?si=YRapwHxAAI6_htLf"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>


    </main>

    <?php include '../include/footer.php'; ?>
</body>

</html>