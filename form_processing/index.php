<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/-->
<!--    3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7-->
<!--    on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <title>Comments</title>
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <h2>Leave the comment</h2>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>

<?php
var_dump($_POST);

if (!empty($_POST)) {
    $username = $_POST['username'];
    $text = $_POST['comment'];
    $data = "{$username}|{$text}.PHP_EOL";
    var_dump('<br>', $data);
    $path = __DIR__.'/comments.txt';
    $handle = fopen($path, 'a');
    $a = fwrite($handle, $data);


//    $a = file_put_contents(__DIR__.'/comments.txt', "{$username}|{$text}.PHP_EOL");
    var_dump($a);
    fclose($handle);
};

?>