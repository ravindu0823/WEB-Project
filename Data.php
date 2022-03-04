<?php
$name = $_REQUEST['uname'];
$password = $_REQUEST['password'];
$gender = $_REQUEST['gender'];
$country = $_REQUEST['country'];
$education = $_REQUEST['education'];

echo("The Username is $name <br>");
echo("The Password is $password <br>");

if ($gender == 'M') {
    echo("The Gender is Male <br>");
} else {
    echo("The Gender is Female <br>");
}

echo("The Country is $country <br>");
echo("The Education is $education <br>");
?>