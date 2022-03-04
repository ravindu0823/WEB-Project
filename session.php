<?php

session_start();

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'new';

$conn = mysqli_connect($server, $username, $password, $dbname);

$uname = $_REQUEST['uname'];
$pass = $_REQUEST['password'];

$login = "SELECT * FROM session";
$result = $conn->query($login);

if ($result-> num_rows > 0) {

}


?>