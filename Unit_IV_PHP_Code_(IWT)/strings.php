<!DOCTYPE html>
<html>

<body>
  <h1>PHP String Example 1</h1>
  <?php
  echo "Hello";
  print "Hello";
  ?>

  <h1>PHP String Example 2</h1>

  <?php
  $firstName = "Dayanand";
  $lastName = "Yadav";
  $fullName = $firstName . " " . $lastName;
  echo $fullName;
  ?>

  <h1>PHP String Example 3</h1>

  <?php
  $x = "John";
  echo 'Hello $x';
  ?>

  <h1>PHP String Example 4</h1>

  <?php
  $x = "John";
  echo "Hello $x";
  ?>

  <h1>PHP String Example 5</h1>

  <?php
  echo strlen("Dayanand");
  ?>

  <h1>PHP String Example 6</h1>

  <?php
  echo str_word_count("Dayanand Yadav");
  ?>

  <h1>PHP String Example 7</h1>

  <?php
  $txt = "I really love PHP!";
  var_dump(str_contains($txt, "love"));
  ?>

  <?php
  $txt = "I really love PHP!";
  var_dump(str_contains($txt, "Love"));
  ?>

  <h1>PHP Example 8</h1>

  <?php
  $x = "dayanand";
  echo strtoupper($x);
  ?>

  <h1>PHP Example 9</h1>

  <?php
  $x = "DAYANAND";
  echo strtolower($x);
  ?>

  <h1>PHP Example 10</h1>

  <?php
  $x = "Dayanand";
  $y = "Yadav";
  $z = $x . " " . $y;
  echo $z;
  ?>

  <h1>PHP Example 11</h1>

  <?php
  $x = "Dayanand Yadav";
  echo substr($x, 5, 3);
  ?>

</body>

</html>