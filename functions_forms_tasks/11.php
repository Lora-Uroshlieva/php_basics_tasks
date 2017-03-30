<?php

//Написать функцию, которая в качестве аргумента принимает строку,
// и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.



function change_sentence(string $string) {
    $arr = explode('. ', $string);
    $result = '';
    for ($i = 0; $i < count($arr); $i++) {
        $part = $arr[$i];
        $first_letter = mb_strtoupper(mb_substr($part, 0, 1));
        $result  .= $first_letter;
        $result .= mb_substr($part, 1);
        if (mb_substr($part, -1) !== '.') {
            $result .= '. ';
        }
    }
    return $result;
}


$text = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';
var_dump(change_sentence($text));
