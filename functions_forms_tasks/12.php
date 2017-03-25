<?php
//12. Написать функцию, которая в качестве аргумента принимает строку,
// и форматирует ее таким образом, что предложения идут в обратном порядке.

$text = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';

function sentence_reverse (string $string) {
    $arr = explode('. ', $string);
    $arr = array_reverse($arr);
    $string_reversed = implode('. ', $arr);
    return $string_reversed;
}

echo sentence_reverse($text);