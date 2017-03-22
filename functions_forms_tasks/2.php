<?php
//Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3
// длинных слов в тексте. Реализовать с помощью функции.

function normalisation($string) {
    $string = preg_replace('/[^a-zA-Zа-яА-Я\s]/ui', '', $string );

    var_dump($string);
//    $pattern = "![^\w]*!";
//    $words = preg_split($pattern, $string);
    $words = explode(' ', $string);
    var_dump($words);
    return $words;
}

//    foreach ($words as $key => $word) {
//        foreach ($word as $index => $letter) {
//            var_dump($letter);
//            if ($letter == ',') {
//                substr_replace($word, '', $index, 1);
//                var_dump($letter);
//explode
//        $words[$key] = strtolower($word);




function longWords(string $text, int $quantity) {
    $array = explode(' ', $text); //split string to array
    $array_of_length = [];
    foreach ($array as $key => $value ) {
        $counter = iconv_strlen($value); // the length of each element
        $array_of_length[$counter] = $key; //the words with the same length won't be repeated. The last word will be written into array.
    }
    $i = 0;
    $array_long_words = []; // array with length of word as key and index of word in origin array as value.
    while ($i < $quantity) {
        $max_length = max(array_keys($array_of_length));
        $index_in_origin_arr = $array_of_length[$max_length];
        $array_long_words[$i] = $array[$index_in_origin_arr];
        array_splice($array, $index_in_origin_arr, 1);
        $i++;
    }
    return $array_long_words;
}




$text = "Лора ipsumsdfsfddd dolor sit amet, consecteturgggggg adipiscing elit";
$x = normalisation($text);
echo $x;
var_dump(longWords($text, 3));
