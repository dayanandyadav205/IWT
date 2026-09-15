<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>
<body>
 <?php include '../header.php'; ?>

      <div>
        <h2>HTML Lists</h2>
        <!-- Ordered List -->
        <h2>Ordered List</h2>
        <ol>
          <li>Pen</li>
          <li>Pencil</li>
          <li>Eraser</li>
        </ol>

        <br>

        <!-- Unordered List -->
        <h2>Unordered List</h2>
        <ul>
          <li>Pen</li>
          <li>Pencil</li>
          <li>Eraser</li>
        </ul>

        <br>

        <!-- Nested list -->
        <h2>Nested List</h2>
        <ol>
          <li>Pen</li>
          <ul>
            <li>Renold</li>
            <li>Montex</li>
            <li>Cello</li>
          </ul>
          <li>Pencil</li>
          <ul>
            <li>Natraj</li>
            <li>Apsara</li>
            <li>DOMS</li>
          </ul>
        </ol>
      </div>

     <?php include '../footer.php'; ?>
</body>
</html>