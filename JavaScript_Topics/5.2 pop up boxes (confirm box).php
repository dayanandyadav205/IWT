<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScript Confirm Box</title>
</head>

<body>
  <?php include '../include/header.php'; ?>

  <script type="text/javascript" language="javascript">
    var MyResult = confirm("Click OK or CANCEL");
    alert("User Clicked on: " + MyResult);
  </script>


    <?php include '../include/footer.php'; ?>
</body>

</html>