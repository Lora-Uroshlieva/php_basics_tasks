<?php

$path = __DIR__.'/../uploads';


/**
 * @param $path
 * @return array of paths
 */
function getPicturesByPath($path) {
    $pictures = [];
    foreach (glob($path."/*.png") as $filename) {
        $pictures[] = basename($filename);
    }
    foreach (glob($path."/*.jpg") as $filename) {
        $pictures[] = basename($filename);
    }
    return $pictures;
}

$pictures = getPicturesByPath($path);
//var_dump($pictures);
?>

<?php foreach ($pictures as $picture):  ?>
    <div>
        <img src="/php_home_tasks/form_processing/uploads/<?php echo $picture; ?>">
    </div>

<?php endforeach ?>


