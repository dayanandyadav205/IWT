<?php

session_start();

$_SESSION["email"]="Dayanand Yadav";
$_SESSION["class"]="BE";

echo $_SESSION["email"];
echo $_SESSION["class"];

session_unset();

?>