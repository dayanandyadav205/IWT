<?php
error_reporting(0);

$hostName = "localhost";
$dbUser = "iwtin_dayanand";
$dbPassword = "321***IWT5@";
$dbName = "iwtin_db_iwt";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if($conn)
{
    //  echo "Connection Ok";
}
else
{
    echo "Connection failed".mysqli_connect_error();
}
?>