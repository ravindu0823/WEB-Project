<?php
session_start();

unset($_SESSION['logged_in']);
unset($_SESSION['user_data']);

$success = ['Logout Successfully'];
$_SESSION['form_validation']['success'] = $success;

header('Location: login.php');
?>