<?php
//Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
//пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
//2, 3, т. е. 6.</p>
//По желанию можете сделать проверку на корректность введения данных пользователем.

$number = 12345;
$result = 0;

if (!is_numeric($number)) {
    echo "Incorrect input, not number";
}
settype($number, "string");
//var_dump($number);
//$result = $number[1];
//$result += $number[2];
//echo $result, '<br>';
//echo $number[1];
$i = 0;
for ($i = 0; $i < 5; $i++) {
    $result += $number[$i];
}

echo $result;