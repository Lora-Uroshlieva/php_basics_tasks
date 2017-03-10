<?php
//Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
//Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
//индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
//индекс.


$arr = [];
for ($i = 0; $i <6; $i++) {
    $arr[] = rand(1, 100);
}
var_dump($arr);
$result = 1;
$odd_index = [];
foreach ($arr as $key => $value) {
    if (!($key % 2) && $value > 0) {
        $result *= $value;
    }
    if ($key % 2 && $value > 0) {
        $odd_index[] = $value;
    }
}
echo "<p> The result is :  $result </p>";
var_dump($odd_index);
