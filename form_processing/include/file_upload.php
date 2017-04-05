<?php
$uploadFolder = __DIR__.'/../uploads/';

$uploadFile = $uploadFolder.basename($_FILES['myFile']['name']);
var_dump($uploadFile);

echo '<pre>';

if (move_uploaded_file($_FILES['myFile']['tmp_name'], $uploadFile)) {
    echo "The file is correct. Downloaded successfully \n";
} else {
    echo "The attack is possible by using file uploading \n";
}

echo "Some additional information: \n";
print_r($_FILES);

print("</pre>");