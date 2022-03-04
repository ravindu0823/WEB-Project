<?php

$filename = $_FILES['file1']['name'];
$filetype = $_FILES['file1']['type'];
$filesize = $_FILES['file1']['size'];
$filetmpname = $_FILES['file1']['tmp_name'];

echo "File name: " . $filename . "<br>";
echo "File type: " . $filetype . "<br>";
echo "File size: " . $filesize . "<br>";
echo "File tmpname: " . $filetmpname . "<br>";



?>