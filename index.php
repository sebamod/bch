<?php
$servername = "casa2024.mysql.database.azure.com";
$username = "adminchile";
$password = "Amanda0705";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


hostname=casa2024.mysql.database.azure.com
username=adminchile
password={your-password}
ssl-mode=require