<?php
$fileName = __DIR__.'/data.txt';

$handle = fopen($fileName, "rw");
fwrite($handle, '\n The second string in file.');
$contents = fread($handle, filesize($fileName));

fclose($handle);

var_dump($contents);