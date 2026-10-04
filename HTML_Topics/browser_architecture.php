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
    <title>Browser Architecture</title>
</head>

<body>
    <?php include '../include/header.php'; ?>

    <main>
        <h1>XHTML Elements Must be Properly Nested</h1>
        <img src="/IWT/images/browser-architecture.png" alt="Browser Architecture">

        <ul>
            <h2>The browser's main components are:</h2>
            <li>The user interface: this includes the address bar, back/forward button, bookmarking menu, etc. Every part of the browser display except the window where you see the requested page.</li>
            <li>The rendering engine: responsible for displaying requested content. For example if the requested content is HTML, the rendering engine parses HTML and CSS, and displays the parsed content on the screen.</li>
            <li>The browser engine: marshals actions between the UI and the rendering engine.</li>
            <li> Networking: for network calls such as HTTP requests, using different implementations for different platform behind a platform-independent interface.</li>
            <li> UI backend: used for drawing basic widgets like combo boxes and windows. This backend exposes a generic interface that is not platform specific. Underneath it uses operating system user interface methods.</li>
            <li> JavaScript interpreter. Used to parse and execute JavaScript code.</li>
            <li> Data storage. This is a persistence layer. The browser may need to save all sorts of data locally, such as cookies. Browsers also support storage mechanisms such as localStorage, IndexedDB, WebSQL and FileSystem.</li>

        </ul>

    </main>




    <?php include '../include/footer.php'; ?>
</body>

</html>