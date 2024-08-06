<?php
$servername = "estadio2024-server.mysql.database.azure.com";
$username = "qselkskaxt";
$password = "sS7Ey$VfHBFFPyYo";
$dbname = "estadio2024-database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>