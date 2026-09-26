<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="/style.css">
    <!-- <script src="/script.js"></script> -->
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- The flexible grid (content) -->
    <main>
        <aside>
            <div class="aboutMe">
                <div class="myImg">
                    <img src="/images/dayanand.jpg" alt=" " />
                </div>
                <div class="myIntro">
                    <h3>About Me</h3>
                    <p>I am Dayanand Yadav, working as an Assistant Professor in Computer Science & Engineering
                        Department in
                        Chameli Devi Group of Institutions, Indore</p>
                </div>
            </div>

            <div class="myLinks">
                <h3 style="color: white;">My Links</h3>
                <ul>
                    <li><a href="https://github.com/dayanandyadav205/CRT" target="_blank"><i
                                class="fa-brands fa-github"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/in/dayanandyadav205" target="_blank"><i
                                class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="https://www.w3.org/" target="_blank"><i class="fa-brands fa-w3c"></i></a></li>
                </ul>
            </div>
        </aside>

        <content>
            <div>
                <img src="/images/CDGI1.png" alt="CDGI">
            </div>

            <section>
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
                <br>
                <h2>Core Technologies</h2>
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
                        <h3>MySQL</h3>
                        <p>The structural relational database management system. MySQL securely stores, retrieves, and
                            organizes data like user profiles, application content, and transaction histories.</p>
                    </div>
                </article>
            </section>
        </content>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>

</html>