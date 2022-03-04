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

$sql = "SELECT name, systemtime FROM table1";
$result = $conn->query($sql);




?>

<!Doctype html>
<html>
<head>
    <title>Get data from the database</title>
</head>
<body>
<table>

</table>
</body>
</html>