<?php
//Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
// Ввод текста реализовать с помощью формы.


// Method 1, with temporary var.
function inverter(string $string) {
    for ($i = 0, $j = iconv_strlen($string)-1; $i <  iconv_strlen($string)/2; $i++, $j--) {
        $temp = $string[$i];
        $string[$i] = $string[$j];
        $string[$j] = $temp;
    }
    return $string;
}

$string = 'abcdefghi';
var_dump(inverter($string));




// Method 2, without temporary var.

function inverter2(string $string) {
    $arr = str_split($string);
    for ($i = 0, $j = count($arr)-1; $i < count($arr)/2; $i++, $j-- ) {
        if ($i != $j) {
            $arr[$i] = [$arr[$i], $arr[$j]];
            $arr[$j] = $arr[$i][0];
            $arr[$i] = $arr[$i][1];
        }
    }
    $reversed_string = implode('', $arr);
    return $reversed_string;
}

$string2 = '0987654321';
var_dump(inverter2($string2));