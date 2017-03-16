<?php
$servername = "localhost";
$username = "experpaw_userdb";
$password = ")8b=QVq5O;y+";
$dbname = "experpaw_tour";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>