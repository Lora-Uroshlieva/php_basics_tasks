<?php
//13. Есть строка $string = '';
//
//Подсчитайте, сколько раз каждый фрукт встречается в этой строке.
// Выведите в виде списка в порядке уменьшения количества:
//
//Пример вывода:
//яблоко – 12
//черешня – 8
//груша – 5
//слива - 3


function counter_from_string (string $string) {
    $arr = explode(' ', $string);
    $result_arr = [];
    foreach ($arr as $value) {
        if (!array_key_exists($value, $result_arr)) {
            $result_arr[$value] = 1;
        }
        else {
            $result_arr[$value] += 1;
        }
    }
    asort($result_arr, SORT_NUMERIC);
    $reversed = array_reverse($result_arr, true);
    foreach ($reversed as $key => $value) {
        echo "<p>$key - $value;</p>";
    }
}

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
counter_from_string($string);