<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>table</title>
</head>
<body>
<?php include '../header.php'; ?>
      <!-- This is my table -->
      <div>
        <h2>Table</h2>
        <table border="1" style="width: 80%; height: 5%;">
          <caption>Student Table</caption>
          <tr>
            <th>Enrollment No</th>
            <th>Name of Student</th>
            <th>Course</th>
          </tr>

          <tr>
            <td>101</td>
            <td>Amit</td>
            <td>B.Tech CSE</td>
          </tr>

          <tr>
            <td>102</td>
            <td>Ajay</td>
            <td>B.Tech CSE</td>
          </tr>
        </table>
      </div>

      
   <?php include '../footer.php'; ?>
</body>
</html>