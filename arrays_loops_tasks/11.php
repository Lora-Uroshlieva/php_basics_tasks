<?php
//Выведите столбец четных чисел в промежутке от нуля до 100.

//Method with while:
$number = 0;
while ($number <= 100) {
    echo $number, ", ";
    $number +=2;
}

//Method with for:
for ($i = 0; $i <=100; $i++) {
    if ($i % 2) {
        continue;
    }
    else {
        echo $i, ", ";
    }
}
