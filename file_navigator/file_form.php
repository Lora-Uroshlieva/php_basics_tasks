<?php

if (!isset($_GET['file'])) {
    die('No file has been specified.');
}

$fileName = trim(strip_tags($_GET['file']));

$path = __DIR__.DIRECTORY_SEPARATOR.'folder'.DIRECTORY_SEPARATOR.$fileName;

if (!is_file($path)) {
    die(sprintf("This path %s  is not a file", $path));
}

$fileContent = file_get_contents($path);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change file </title>
</head>
<body>
<div class="container" style="margin-top: 30px">
    <h2>Change the file <?php echo $fileName; ?></h2>
    <form action="./fileChanger.php" method="post">
        <div class="form-group">
            <label for="file_name">Name of file</label>
            <input type="text"
                   id="file_name"
                   name="file_name"
                   value="<?php echo $fileName; ?>"
                   placeholder="<?php echo $fileName; ?>">
        </div><br/>
        <div class="form-group">
            <label for="file_content">Content of file</label>
            <textarea
                name="file_content"
                id="file_content"
                class="form-control" rows="10"><?php echo $fileContent; ?>
            </textarea>
        </div><br/>
        <input type="hidden" name="file_path" value="<?php echo $path;?>">
        <button type="submit" class="btn btn-primary">Change file</button>
    </form>

</div>
</body>
</html>
