<?php
$host = 'localhost';
$user = 'root';
$password = ''; // change this if your MySQL password is different
$db = 'dsa';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


