<?php

//old method without recursion:
if ($handle = opendir(__DIR__)) {
    echo "Directory handle: $handle", PHP_EOL;
    echo "Entries: ", PHP_EOL;
    while (false !== ($entry = readdir($handle))) {
        echo "$entry", PHP_EOL;
    }

    closedir($handle);
}

echo '----------------------------', '<br>';

//recursive function
function readDirRecursive($path) {
    if ($handle = opendir($path)) {
        echo "Directory handle: $handle", '<br>';
        echo "Entries: ", '<br>';

        while (false !== ($entry = readdir($handle))) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }

            echo $entry, ' - name, <br>';
            $entryPath = $path.DIRECTORY_SEPARATOR.$entry;
            echo $entryPath, ' - is full path. <br>';

            if (is_dir($entryPath)) {
                readDirRecursive($entryPath);
            }
        }

        closedir($handle);
    }
}

readDirRecursive(__DIR__);

echo '--------------------------', '<br>';

