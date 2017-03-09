<?php
//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
// С помощью цикла foreach создайте строку '123456789'. Циклы while и for

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

//method 1 - foreach:
$string = '';
foreach ($array as $item) {
    $string .= $item;
}
var_dump($string);

//method 2 - for:
$str_2 = '';
for ($i = 1; $i < 10; $i++) {
    $str_2 .= $i;
}
var_dump($str_2);

//method 3 - while:

$str_3 = '';
$i = 0;
while ($i < count($array)) {
    $str_3.= (string) $array[$i];
    $i++;
}
var_dump($str_3);

