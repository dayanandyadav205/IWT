<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
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
    <title>HOME</title>
</head>

<body>
    <!-- Include Header using php  -->

<?php include './include/header.php'; ?>

    <!-- Aside and Main Section -->
    <div class="containerAsideMain">
        <!-- This is aside section -->
        <aside>
            <div class="aboutme">
                <h2>About Me</h2>
                <div class="myimg">
                    <img src="/IWT/images/dayanand.jpg" alt="Dayanand's Image">
                </div>
                <p>I am Dayanand Yadav, working as an Assistant Professor in
                    Computer Science & Engineering Department in
                    Chameli Devi Group of Institutions, Indore</p>
            </div>



            <div>
                <h2>My Important links</h2>
            </div>
            <div class="mylinks">
                <a href="https://github.com/dayanandyadav205" target="_blank"><img src="/IWT/images/github.jpg"
                        alt="My GitHub page"></a>
                <a href="https://www.linkedin.com/in/dayanandyadav205/" target="_blank"><img src="/IWT/images/linkedin.jpg"
                        alt="My Linkedin page"></a>
            </div>
        </aside>

        <!-- This is main section -->
        <main>
            <!-- Anchor Link that ump to JavaScript Section -->
            <a href="#core">Jump to Core Technologies Section</a>

            <div class="imgcdgi">
                <img src="/IWT/images/cdgi.jpg" alt="CDGI">
            </div>
            <article>
                <div>
                    <h1>IWT5</h1>
                    <p>IWT5 is an educational web development and programming resource platform created by Dayanand
                        Yadav, an Assistant Professor in the Computer Science & Engineering Department at Chameli Devi
                        Group of Institutions (CDGI) in Indore, India.</p>

                    <h2>Key Features</h2>
                    <ul>
                        <li><strong>Web Technologies:</strong> Offers tutorials and examples covering HTML, CSS, and
                            JavaScript.</li>
                        <li><strong>Interactive Apps:</strong> Includes working mini-applications like a shopping cart,
                            quizzes, and games.</li>
                    </ul>
                </div>
            </article>
            <h2 id="core">Core Technologies</h2>
            <!-- HTML -->
            <article>
                <div>
                    <!-- Image placeholder if needed -->
                </div>
                <div>
                    <h3>HTML (HyperText Markup Language)</h3>
                    <p>The structural backbone of the web. HTML is used to define and arrange elements on a webpage,
                        such as paragraphs, headers, links, and forms.</p>
                </div>
            </article>

            <!-- CSS -->
            <article>
                <div>
                    <!-- Image placeholder if needed -->
                </div>
                <div>
                    <h3>CSS (Cascading Style Sheets)</h3>
                    <p>The design and presentation layer. CSS controls how HTML elements look by managing layouts,
                        colors, fonts, spacing, and responsive behaviors across devices.</p>
                </div>
            </article>

            <!-- JavaScript -->
            <article>
                <div>
                    <!-- Image placeholder if needed -->
                </div>
                <div>
                    <h3>JavaScript (JS)</h3>
                    <p>The interactive behavior engine. JavaScript runs primarily in the client browser, handling
                        complex user interactions, data validation, animations, and dynamic content updates.</p>
                </div>
            </article>

            <!-- PHP -->
            <article>
                <div>
                    <!-- Image placeholder if needed -->
                </div>
                <div>
                    <h3>PHP (Hypertext Preprocessor)</h3>
                    <p>A server-side scripting language. PHP processes incoming data from forms, communicates with
                        databases, and dynamically generates customized HTML before it reaches the browser.</p>
                </div>
            </article>

            <!-- MySQL -->
            <article>
                <div>
                    <!-- Image placeholder if needed -->
                </div>
                <div>
                    <section id="bottom"></section>
                    <h3>MySQL</h3>
                    <p>The structural relational database management system. MySQL securely stores, retrieves, and
                        organizes data like user profiles, application content, and transaction histories.</p>
                </div>
            </article>
        </main>
    </div>

    <!-- Goto Top Button -->
    <div class="top">
        <a href="#top">Goto Top</a>
    </div>

    <!-- This is footer section -->
    <?php include './include/footer.php'; ?>

</body>

</html>