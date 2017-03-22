<?php

//Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать
// только те слова, которые есть и в первом и во втором поле ввода.
//Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
// которая будет возвращать массив с общими словами.


function normalisation(string $str) {
    $str = strtolower($str);
    $str = preg_replace('#[.,!]#', '', $str);
    $words = explode(' ', $str);
    return $words;
}

function getCommonWords(string $a, string $b) {
    $a_array = normalisation($a);
    $b_array = normalisation($b);
    $result = array_intersect($a_array, $b_array);
    return $result;
}

$str1 = 'While PHP has well over three-score array functions, array_rotate is strangely missing as of PHP 5.3. Searching online offered several solutions, but the ones I found have defects such as inefficiently looping through the array or ignoring keys.';
$str2 = ' but the ones I found have defects such as inefficiently looping through the array or ignoring keys. The following array_rotate() function uses array_merge and array_shift to reliably rotate an array forwards or backwards, preserving keys.';

var_dump(getCommonWords($str1, $str2));