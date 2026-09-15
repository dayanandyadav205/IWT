<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Selectors</title>

<style>
div.relative {
  position: relative;
  width: 400px;
  height: 200px;
  border: 3px solid green;
} 

div.absolute {
  position: absolute;
  top: 80px;
  right: 0;
  width: 200px;
  height: 100px;
  border: 3px solid red;
}
</style>
</head>
<body>
 <?php include '../header.php'; ?>

<h2>Using position: absolute;</h2>

<p>An element with position: absolute; is positioned relative to the nearest positioned ancestor:</p>

<div class="relative">This div element has position: relative;
  <div class="absolute">This div element has position: absolute;</div>
</div>

 <?php include '../footer.php'; ?>
</body>
</html>


