<?php

// Getting Details
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'new';

$ip = $_SERVER['REMOTE_ADDR'];

// Create Connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo("Connection Success!!!!<br>");
}

$sql = "DELETE FROM table1 WHERE name = 'ggggg'";

if ($conn->query($sql) == true) {
    echo ("Deleted Successfully");
}

$conn->close();
?>