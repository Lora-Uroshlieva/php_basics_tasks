<?php

function normalisation($str) {
    $str = strtolower($str);
    $str = preg_replace('#[.,!]#', '', $str);
    $words = explode(' ', $str);
    return $words;
}
$b = normalisation($str1);
var_dump($b);