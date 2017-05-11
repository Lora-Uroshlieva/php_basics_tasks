<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$files_dir = __DIR__.DIRECTORY_SEPARATOR."uploads_dir";

if (move_uploaded_file($_FILES['myFile']['tmp_name'],
    $files_dir.DIRECTORY_SEPARATOR.$_POST["new_name"])) {
    echo "The file is uploaded successfully.";
} else {
    echo "upload error";
}
