<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Crucial tag for responsive mobile behavior -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <?php include 'header.php'; ?>

    <main>
  <!-- Content wrapper ensures article & section stay grouped on desktop grid -->
  <div class="content-area">
    <div class="tech-container">
    <!-- HTML Card -->
    <div class="tech-card">
        <div class="tech-image">
            <!-- <img src="/" alt="HTML Icon"> -->
        </div>
        <div class="tech-content">
            <h3>HTML (HyperText Markup Language)</h3>
            <p>The structural backbone of the web. HTML is used to define and arrange elements on a webpage, such as paragraphs, headers, links, and forms.</p>
        </div>
    </div>

    <!-- CSS Card -->
    <div class="tech-card">
        <div class="tech-image">
            <!-- <img src="https://picsum.photos" alt="CSS Icon"> -->
        </div>
        <div class="tech-content">
            <h3>CSS (Cascading Style Sheets)</h3>
            <p>The design and presentation layer. CSS controls how HTML elements look by managing layouts, colors, fonts, spacing, and responsive behaviors across devices.</p>
        </div>
    </div>

    <!-- JavaScript Card -->
    <div class="tech-card">
        <div class="tech-image">
            <!-- <img src="https://picsum.photos" alt="JavaScript Icon"> -->
        </div>
        <div class="tech-content">
            <h3>JavaScript (JS)</h3>
            <p>The interactive behavior engine. JavaScript runs primarily in the client browser, handling complex user interactions, data validation, animations, and dynamic content updates.</p>
        </div>
    </div>

    <!-- PHP Card -->
    <div class="tech-card">
        <div class="tech-image">
            <!-- <img src="https://picsum.photos" alt="PHP Icon"> -->
        </div>
        <div class="tech-content">
            <h3>PHP (Hypertext Preprocessor)</h3>
            <p>A server-side scripting language. PHP processes incoming data from forms, communicates with databases, and dynamically generates customized HTML before it reaches the browser.</p>
        </div>
    </div>

    <!-- MySQL Card -->
    <div class="tech-card">
        <div class="tech-image">
            <!-- <img src="https://picsum.photos" alt="MySQL Icon"> -->
        </div>
        <div class="tech-content">
            <h3>MySQL</h3>
            <p>The structural relational database management system. MySQL securely stores, retrieves, and organizes data like user profiles, application content, and transaction histories.</p>
        </div>
    </div>

</div>

        </div>

        <aside>
        <h2>Dayanand Yadav</h2>
        <h4>Assistant Professor</h4>
          <p> Computer Science & Engineering Department<p>
          <p> Chameli Devi Group of Institutions, Indore</p>

        <!-- Contact Information -->
        <ul>
            <li><strong>My Website:</strong> <a href="https://www.iwt5.in" target="_blank">www.iwt5.in</a></li>
            <li><strong>Personal Mail 1:</strong> <a href="mailto:dayanand.yadav@iwt5.in">dayanand.yadav@iwt5.in</a></li>
            <li><strong>Personal Mail 2:</strong> <a href="mailto:dayanandyadav205@gmail.com">dayanandyadav205@gmail.com</a></li>
            <li><strong>Official Mail:</strong> <a href="mailto:dayanand.yadav@cdgi.edu.in">dayanand.yadav@cdgi.edu.in</a></li>
            <li><strong>Mobile:</strong> <a href="tel:09926079083">099260-79083</a></li>
        </ul>

        <!-- Social Connections -->
        <div>
            <a href="https://github.com/dayanandyadav205" aria-label="GitHub" style="margin-right: 15px;"><i class="fa-brands fa-github fa-lg"></i></a>
            <a href="https://www.linkedin.com/in/dayanandyadav205/" aria-label="LinkedIn"><i class="fa-brands fa-linkedin fa-lg"></i></a>
        </div>
        </aside>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
