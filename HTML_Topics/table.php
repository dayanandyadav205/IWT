<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML Tables</title>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      padding-top: 10px;
      padding-bottom: 20px;
      padding-left: 30px;
      padding-right: 40px;
    }

    table {
      border-spacing: 30px;
    }
  </style>
</head>

<body>
  <?php include '../include/header.php'; ?>

  <!-- This is my table -->
  <main>
    <h2>A basic HTML table</h2>

    <table style="width:100%">
      <tr>
        <th style="width:70%">Company</th>
        <th>Contact</th>
        <th>Country</th>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
    </table>

    <br><br>
    <h2>Vertical Table Headers</h2>

    <p>The first column becomes table headers if you set the first table cell in each table row to a TH element:</p>

    <table style="width:100%">
      <tr>
        <th>Firstname</th>
        <td>Jill</td>
        <td>Eve</td>
      </tr>
      <tr>
        <th>Lastname</th>
        <td>Smith</td>
        <td>Jackson</td>
      </tr>
      <tr>
        <th>Age</th>
        <td>50</td>
        <td>94</td>
      </tr>
    </table>

    <br><br>

    <h2>Cell that spans two columns</h2>
    <p>To make a cell span more than one column, use the colspan attribute.</p>

    <table style="width:100%">
      <tr>
        <th colspan="2">Name</th>
        <th>Age</th>
      </tr>
      <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>43</td>
      </tr>
      <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>57</td>
      </tr>
    </table>

    <br><br>


    <h2>Cell that spans two rows</h2>
    <p>To make a cell span more than one row, use the rowspan attribute.</p>

    <table style="width:100%">
      <tr>
        <th>Name</th>
        <td>Jill</td>
      </tr>
      <tr>
        <th rowspan="2">Phone</th>
        <td>555-1234</td>
      </tr>
      <tr>
        <td>555-8745</td>
      </tr>
    </table>

    <h2>For more details please refer the Unit-II PPT</h2>
  </main>

  <?php include '../include/footer.php'; ?>
</body>

</html>