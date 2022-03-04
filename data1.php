<?php
$name = $_REQUEST['name'];

// Getting Details
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'new';

// Create Connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo("Connection Success!!!!<br>");
}

$sql = "INSERT INTO table1 (name) VALUES ('$name')";

if ($conn->query($sql) == true) {
    echo("Inserted Successfully");
}

$conn->close();
?>