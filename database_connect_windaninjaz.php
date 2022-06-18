<?php
echo "<p>connecting to database</p>";
$servername = "localhost";
$username = "user1";
$password = "windaninja";
$dbname = "windaninjaz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection Failed: " . $conn->connect_error);
}
echo "<p>Connected to database</p>";
?>