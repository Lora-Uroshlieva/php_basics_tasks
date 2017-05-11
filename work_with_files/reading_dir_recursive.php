<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function read_directory_content(string $path) {
    if ($handler = opendir($path)) {
        echo "The handler descriptor: {$handler}. <br>";
    } else {
        die("Cannot open the directory");
    }

    while (false !== ($entry = readdir($handler))) {
        if ($entry === '.' || $entry === '..') {
            continue;
        }
        echo "The entry is: {$entry}. <br>";
//        var_dump($entry);
        if (is_dir($entry)) {
            read_directory_content($entry);
        }
    }

    closedir($handler);
}


$my_dir = __DIR__.DIRECTORY_SEPARATOR."directory_test";
$dir = "/var/www";

read_directory_content(__DIR__);


function find_file($path, $part_name) {
    if ($handler = opendir($path)) {
        echo "The handler descriptor: {$handler} . <br>";
    } else {
        die("Cannot open the directory");
    }

    while (false !== ($entry = readdir($handler))) {
        if ($entry === '.' || $entry === '..') {
            continue;
        }

        if (stristr($entry, $part_name)) {
            echo "The entry is: {$entry} . <br>";
        }

        if (is_dir($entry)) {
            read_directory_content($entry);
        }
    }

    closedir($handler);
}


echo "********************************************<br>";
find_file(__DIR__, 'txt');