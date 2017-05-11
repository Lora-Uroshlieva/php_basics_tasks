<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read the half of file</title>
</head>
<body>
<p>
    <?php
    $path = __DIR__."/Test1.txt";
    $handler = fopen($path, 'r') or die("Can not open the file");

    $size = filesize($path);
    $position = (int)($size / 2);
    fseek($handler, $position);
    $text = fread($handler, $size-$position);
    echo $text;
    fclose($handler);
    echo "<br><br>";
    var_dump(file('Test1.txt'));
    ?>
</p>
</body>


