<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("Connection Failed" . $conn->connection_error);
}
?>

