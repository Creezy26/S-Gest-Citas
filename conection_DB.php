<?php 


$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "login";

$connection = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    exit("Conexión no lograda: " . mysqli_connect_error());
}
?>