<?php
include __DIR__."/functions.php";

$path = __DIR__.'/../uploads';

$pictures = getPicturesByPath($path);
?>

<?php foreach ($pictures as $picture):  ?>
    <div>
        <img src="/php_home_tasks/form_processing/uploads/<?php echo $picture; ?>">
    </div>

<?php endforeach ?>


