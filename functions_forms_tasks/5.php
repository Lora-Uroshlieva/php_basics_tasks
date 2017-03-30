<?php

//Написать функцию, которая выводит список файлов в заданной директории,
// которые содержат искомое слово.
//  Директория и искомое слово задаются как параметры функции.


function find_file($path, string $word) {
    if ($handle = opendir($path)) {
        echo "Directory handle: $handle <br>";
        echo "Entries: <br>";

        while (false !== ($entry = readdir($handle))) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }
            elseif (stristr($entry, $word)) {
                echo $entry, '<br>';
            }


            $entry_path = $path.DIRECTORY_SEPARATOR.$entry;

            if (is_dir($entry_path)) {
                find_file($entry_path, $word);
            }
        }

        closedir($handle);
    }
}

$path = realpath(__DIR__);
find_file($path, '2');