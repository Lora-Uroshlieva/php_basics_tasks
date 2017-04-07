<?php

if (!empty($_POST)) {
    $title = $_POST['file_name'];
    $content = $_POST['file_content'];
    $path = $_POST['file_path'];


    //
    if (!is_file($path)) {
        die(sprintf("The file %s doesn't exist.", $path));
    }

    if (!is_writable($path)) {
        die(sprintf("The file %s is not writable", $path));
    }

    file_put_contents($path, $content);

    $fileName = basename($path);
    if ($fileName !== $title) {
        $pathWithoutFile = str_ireplace($fileName, '', $path);
        $newPath = $pathWithoutFile.DIRECTORY_SEPARATOR.$title;
        rename($path, $newPath);
    }

}