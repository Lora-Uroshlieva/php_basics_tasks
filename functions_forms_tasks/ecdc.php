<?php

function normalisation($str) {
    $str =  mb_strtolower($str, 'UTF-8');
    $str = preg_replace('#[.,!]#', '', $str);
    $words = explode(' ', $str);
    return $words;
}
$b = normalisation($str1);
var_dump($b);