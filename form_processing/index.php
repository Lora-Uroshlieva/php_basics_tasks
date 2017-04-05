<?php


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <h2>Leave the comment</h2>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div><br/>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" class="form-control" rows="10"></textarea>
            </div><br/>
            <input type="hidden" name="token" value="">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>

<?php
$content = file_get_contents(__DIR__.'/data/comments.json');
$comments = explode('.PHP_EOL', $content);
?>


<?php foreach ($comments as $comment): ?>
    <?php
        if ($comment === '') {
            continue;
        }
        list($username, $text) = explode('|', $comment);
    ?>
    <div>
        <hr>
        <p><b>User:</b> <?php echo $username; ?></p>
        <p><b>Text of comment:</b> <?php echo $text; ?></p>
    </div>
<?php endforeach ?>



<?php

if (!empty($_POST)) {
    $username = strip_tags($_POST['username']);
    $text = strip_tags($_POST['comment']);

    $fileName = 'comments1.json';
    $pathToFile = 'data/data1';
    if (!is_dir($pathToFile)) {
        mkdir($pathToFile, $recursive=true);
    }

    $path = __DIR__.DIRECTORY_SEPARATOR.$pathToFile.DIRECTORY_SEPARATOR.$fileName;
    if (!file_exists($path)) {
        $fp = fopen($path, 'r');
        fclose($fp);
    }

    $jsonContent = file_get_contents($path);
    $comments = json_decode($jsonContent);
    $comments[] = [$username, $text];
    file_put_contents($path, json_encode($comments));





//    $data = "{$username}|{$text}.PHP_EOL";
//
//
//
//    $isWritten = file_put_contents($path, $data, $flags=FILE_APPEND);
//    $handler = fopen($path, 'a');  //another way to write in file
//    $a = fwrite($handler, $data);
//    fclose($handler);


//    if ($isWritten) {
//    echo "<p>Your comment is very important for us!</p>";
//    }
}

?>