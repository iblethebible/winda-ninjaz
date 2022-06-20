<?php
$servername = "localhost";
$username = "user1";
$password = "windaninja";
$dbname = "windaninjazdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection Failed: " . $conn->connect_error);
}

?>
