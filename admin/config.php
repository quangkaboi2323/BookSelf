<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'book_self';
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) echo "Connection Error: " . $conn->connect_error;

?>