<?php
$host = "172.104.182.79";
$userName = "janetZ";
$password = "449900!!";
$dbName = "xpbexxysxj";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>