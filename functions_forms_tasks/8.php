<?php
//Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле
// и добавить его. Все добавленные комментарии выводятся над текстовым полем.
// Реализовать проверку на наличие в тексте запрещенных слов, матов.
// При наличии таких слов - выводить сообщение "Некорректный комментарий".
// Реализовать удаление из комментария всех тегов, кроме тега

$comment = '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
define("FORBIDDEN_WORDS", ['Lorem', 'adipiscing', 'tempor']);


function normalisation(string $str) {
    $str = strtolower($str);
    $str = preg_replace('#[.,!]#', '', $str);
    $words = explode(' ', $str);
    return $words;
}

function check_forbidden_words(string $string) {
    $arr = normalisation($string);
    $found_forbidden = array_intersect($arr, FORBIDDEN_WORDS);
    if ($found_forbidden) {
        echo "Your comment contains forbidden words. We can not publish it.";
    }
}

check_forbidden_words($comment);