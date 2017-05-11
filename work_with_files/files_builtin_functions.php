<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$path = __DIR__."/test.txt";

if (file_exists($path)) {
    echo "The file by path:  {$path}  - exists. ";
} else {
    echo "The file does not exist.";
}

if (is_file($path)) {
    echo "<br> this is file.";
} else {
    echo "<br> this is directory";
}

if (is_readable($path)) {
    echo "<br> you can read file.";
} else {
    echo "<br> you can not read file.";
}

if (is_writable($path)) {
    echo "<br> you can write to file.";
} else {
    echo "<br> you can not write to file.";
}

echo "<br> The size of file is: ".filesize($path)." bites";
echo "<br> The file was changed last time: ".date ("F d Y H:i:s.", filemtime($path));
echo "<br> The file was used last time: ".date ("F d Y H:i:s.", fileatime($path));
echo "<br> The type of file is: ".filetype($path);

if (touch("Test1.txt")) {
    echo "<br> The file was created<br>";
}

//Copying the file:
$source = __DIR__."/test.txt";
$result = __DIR__."/test_copy.txt";
if (copy($source, $result)) {
    echo "The copy is done.<br>";
} else {
    echo "The error during copying.<br>";
}

//Removing the file
if (unlink($result)) {
    echo "The removing is done.<br>";
} else {
    echo "The error during removing.<br>";
}