<?php
$host = "localhost"; // or your InfinityFree host
$user = "root"; // or your InfinityFree username
$pass = ""; // or your InfinityFree password
$db = "moneygear_db"; // your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
