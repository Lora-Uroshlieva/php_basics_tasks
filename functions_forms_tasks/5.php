<?php

//Написать функцию, которая выводит список файлов в заданной директории,
// которые содержат искомое слово.
//  Директория и искомое слово задаются как параметры функции.


function find_file($path, string $word) {
    if ($handle = opendir($path)) {
        echo "Directory handle: $handle", PHP_EOL;
        echo "Entries: ", PHP_EOL;

        while (false !== ($entry = readdir($handle))) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }
            elseif (stristr($entry, $word)) {
                echo $entry, PHP_EOL;
            }


            $entry_path = $path.DIRECTORY_SEPARATOR.$entry;

            if (is_dir($entry_path)) {
                read_dir($entry_path);
            }
        }

        closedir($handle);
    }
}

find_file(__DIR__, '1');