<?php
ini_set('display_errors', 1);

$folder = '';
if (isset($_GET['folder'])) {
    $folder = trim(strip_tags($_GET['folder']));
}
//echo "the parent directory is: {$folder}";


$path = __DIR__.DIRECTORY_SEPARATOR.'folder'.DIRECTORY_SEPARATOR.$folder;
$files = scandir($path);
//var_dump($files);

foreach ($files as $file) {
    if (is_dir($path.DIRECTORY_SEPARATOR.$file)) {
        echo "<p>
            {$file}
            <a href='./file_reader.php/?folder={$file}'> <b>[folder]</b></a>
            </p>";
    } else {
        echo "<p>
        {$file} 
        <a href='./fileChanger.php?file={$file}'
        <b>[file]</b>
        </p>";
    }
}