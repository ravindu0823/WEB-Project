<?php
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

$sql = 'INSERT INTO student VALUES ("hello", "hello123", "M", "GG", "O/L")';

if ($conn->query($sql) == true) {
    echo ("Inserted Successfully");
}

$conn->close();

?>