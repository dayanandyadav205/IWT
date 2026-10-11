<?php

session_start();

echo $_SESSION["email"];
echo $_SESSION["class"];

session_unset();
?>