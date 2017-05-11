<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$curdir = __DIR__;
$new_dir = 'directory_test';
$path = $curdir.DIRECTORY_SEPARATOR.$new_dir;

mkdir($path, 0777);
touch('directory_test/inner1.txt');
mkdir($path.'/inner_dir', 0777);

$dir = opendir($path);
while ($element = readdir($dir)) {
    echo $element."<br>";
}