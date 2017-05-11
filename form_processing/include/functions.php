<?php

/**
 * @param $path
 * @return array of picture names
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