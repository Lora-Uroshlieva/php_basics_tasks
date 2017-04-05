<?php
$content = file_get_contents(__DIR__.'/data/comments.txt');
$comments = explode('.PHP_EOL', $content);
?>

<h2>Comments</h2>

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
<?php endforeach; ?>