<?php
$content = file_get_contents(__DIR__.'/data/comments.txt');
$comments = explode('.PHP_EOL', $content);

function replaceBadWords (string $text) {
    $dictionaryContent = file_get_contents(__DIR__.'/data/bad_words.txt'); //read bad words from file
    $badWords = explode(PHP_EOL, $dictionaryContent); //get the list of words
    $changed = str_ireplace($badWords, '###', $text); // check text and replace bad words, if were found.
    return $changed;
}
?>

<h2>Comments</h2>

<?php foreach ($comments as $comment): ?>
    <?php
    if ($comment === '') {
        continue;
    }

    list($username, $text) = explode('|', $comment);

    $text = replaceBadWords($text);

    ?>
    <div>
        <hr>
        <p><b>User:</b> <?php echo $username; ?></p>
        <p><b>Text of comment:</b> <?php echo $text; ?></p>
    </div>
<?php endforeach; ?>