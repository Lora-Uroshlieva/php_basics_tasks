<?php
ini_set('display_errors', 1);

//Append data to file by using function fopen() in append mode.
/**
 * @param $path
 * @param $text
 * @return bool
 */
function appendToFile($path, $text) {
    $handler = fopen($path, 'a');
    $isWritten = (bool) fwrite($handler, $text);
    fclose($handler);
    return $isWritten;
}

/**
 * @param $fileName
 * @param null $pathToFile
 * @return string
 */
function getPathToFile ($fileName, $pathToFile=null) {
    $pathToFile = __DIR__.DIRECTORY_SEPARATOR.$pathToFile;
    if (!is_dir($pathToFile)) {
        mkdir($pathToFile, $mode=0777, $recursive=true);
    }
    $path = $pathToFile.DIRECTORY_SEPARATOR.$fileName;
    if (!file_exists($path)) {
        $fp = fopen($path, 'a');
        fclose($fp);
    }
    return $path;
}


if (!empty($_POST)) {
    $username = strip_tags($_POST['username']);
    $text = strip_tags($_POST['comment']);
    $data = "{$username}|{$text}.PHP_EOL";


    $path = getPathToFile('comments.txt', 'data');
    if (!$path) {
        die('File with comments is not available.');
    }


    //Writing into json-file.
//    $jsonContent = file_get_contents($path);
//    $comments = json_decode($jsonContent);
//    $comments[] = [$username, $text];
//    file_put_contents($path, json_encode($comments));


    // Write in file using function file_put_contents().
//    $isWritten = file_put_contents($path, $data, $flags=FILE_APPEND);


    //Serialisation of data.
//    $serializedContent = file_get_contents($path);
//    $comments = unserialize($serializedContent);
//    $comments[] = [$username, $text];
//    file_put_contents($path, serialize($comments), $flags=FILE_APPEND);


    $isWritten = appendToFile($path, $data);
}