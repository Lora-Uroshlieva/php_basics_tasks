<?php
//Ваше задание создать массив, наполнить это случайными значениями (функция rand),
//найти максимальное и минимальное значение и поменять их местами.

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 1000);
}
var_dump($arr);

$maximum = max($arr);
$minimum = min($arr);
$key_max = array_search($maximum, $arr);
$key_min = array_search($minimum, $arr);
echo "max number is $maximum on position $key_max, min number is $minimum on position $key_min <br>";

$arr[$key_max] = $minimum;
$arr[$key_min] = $maximum;

var_dump($arr);
