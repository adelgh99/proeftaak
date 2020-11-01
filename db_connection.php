<?php
// DEZE MOET IK NOG VIA OOP GAAN MAKEN

$servername = "localhost";
$username = "adel";
$password = "admin";
$dbname = "stellingen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
