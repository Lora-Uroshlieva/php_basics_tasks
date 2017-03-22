<?php
//Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3
// длинных слов в тексте. Реализовать с помощью функции.

function normalisation($str) {
    $str = strtolower($str);
    $str = preg_replace('#[.,!]#', '', $str);
    $words = explode(' ', $str);
    return $words;
}

function longWords(string $text, int $quantity) {
    $arr = normalisation($text);
    $length_of_el = [];
    foreach ($arr as $key => $value) {
        $counter = iconv_strlen($value);
        $length_of_el[$key] = $counter;
    }
    $i = 0;
    $result_arr = [];
    while ($i<$quantity) {
        $max = max($length_of_el);
        echo $max, '<br>';
        $key_max = array_search($max, $length_of_el);
        $result_arr[$i] = $arr[$key_max];
        unset($length_of_el[$key_max]);
        $i++;
    }
    return $result_arr;
}


$text = "іііііііііііі An array in PHP is actually an ordered map. A map is a type that associates values to keys. This type is optimized for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more. As array values can be other arrays, trees and multidimensional arrays are also possible.";
var_dump(longWords($text, 3));
