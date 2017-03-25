<?php
//Написать функцию, которая выводит список файлов в заданной директории.
// Директория задается как параметр функции.

function read_dir($path) {
    if ($handle == opendir($path)) {
        echo "Directory handle: $handle", PHP_EOL;
        echo "Entries: ", PHP_EOL;
    }
}