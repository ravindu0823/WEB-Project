<?php
$oldname = $_REQUEST['oldname'];
$newname = $_REQUEST['newname'];

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

$sql = "UPDATE table1 SET name = '$newname' WHERE name = '$oldname'";

if ($conn->query($sql) == true) {
    echo("Updated Successfully");
}

$conn->close();
?>