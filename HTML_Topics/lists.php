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
  <!-- <meta http-equiv="refresh" content="30"> -->

  <!-- Setting the viewport to make your website look good on all devices: -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML Lists</title>

  <style>
    .List-container {
      padding: 50px;
      margin: 20px;
    }
  </style>
</head>

<body>
  <?php include '../include/header.php'; ?>

  <main>
    <h2>HTML Lists</h2>
    <div class="List-container">


      <h1>Lists</h1>

      <h2>Ordered List</h2>
      <ol>
        <li>fsfdgf</li>
      </ol>
      <ol>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
      </ol>

      <h2>Unordered List</h2>
      <ul>
        <li>pen</li>
        <li>Item 2</li>
        <li>Item 3</li>
      </ul>


      <h2>Nested List</h2>
      <ul>
        <li>pen</li>
        <ul>
          <li>Montex</li>
          <li>Reynolds</li>

        </ul>
        <li>Item 2</li>
        <li>Item 3</li>
      </ul>

    </div>

    <h2>For more details please refer the Unit-II PPT</h2>
  </main>

  <?php include '../include/footer.php'; ?>
</body>

</html>