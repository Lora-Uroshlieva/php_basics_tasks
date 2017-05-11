<?php
$setting = ini_set('upload_max_filesize', 5000);
$restriction = ini_get('upload_max_filesize');


$uploadFolder = __DIR__.'/../uploads/';

if (!empty($_FILES)) {
    $myFile = $_FILES['myFile'];

    $uploadFile = $uploadFolder.basename($_FILES['myFile']['name']);
    if ($myFile['type'] === 'text/xml') {
        simplexml_load_file($myFile['tmp_name']);
    }

    echo '<pre>';

    if (move_uploaded_file($_FILES['myFile']['tmp_name'], $uploadFile)) {
        echo "The file is correct. Downloaded successfully \n";
    } else {
        echo "The attack is possible by using file uploading \n";
    }

    echo "Some additional information: \n";
    print_r($_FILES);

    print("</pre>");
}



