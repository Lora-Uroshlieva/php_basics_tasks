<?php
//Написать функцию, которая считает количество уникальных слов в тексте.
// Слова разделяются пробелами. Текст должен вводиться с формы.

function counter_unique(string $str) {
    $words = explode(' ', $str);
    $count_list = [];
    foreach ($words as $word) {
        if (!array_key_exists($word, $count_list)) {
            $count_list[$word] = 1;
        }
        else {
            $count_list[$word] += 1;
        }
    }
    $result = 0;
    foreach ($count_list as $value) {
        if ($value === 1) {
            $result +=1;
        }
    }
    return $result;
}


$text_from_form = 'Написать функцию которая считает количество уникальных слов в тексте Написать функцию которая ';
echo counter_unique($text_from_form);