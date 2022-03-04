<?php

$filename = $_FILES['image']['name'];
$filetmpname = $_FILES['image']['tmp_name'];
$flag = move_uploaded_file($filetmpname, "C:/WEB/$filename");

if ($flag) {
    echo "File moved Successfully";
} else {
    echo "Sorry couldn't move";
}

?>