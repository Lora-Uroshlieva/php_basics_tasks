<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

var_dump($_FILES);
echo "<br>";
var_dump($_POST);
var_dump($_FILES['myFile']['tmp_name']);
var_dump($_POST["new_name"]);

$files_dir = __DIR__.DIRECTORY_SEPARATOR."uploads_dir";

if (move_uploaded_file($_FILES['myFile']['tmp_name'],
    $files_dir.DIRECTORY_SEPARATOR.$_POST["new_name"])) {
    echo "The file is uploaded successfully.";
} else {
    echo "upload error";
}
