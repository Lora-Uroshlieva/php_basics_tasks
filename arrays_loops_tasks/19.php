<?php
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
// а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$days_of_week = ['Monday', 'Tuesday', 'Thursday', 'Wednesday', 'Friday', 'Saturday', 'Sunday'];
$day = 'Wednesday';
foreach ($days_of_week as $item) {
    if ($item == $day) {
        echo "<i>$item</i><br>";
    }
    else {
        echo "<p>$item</p>";
    }
}
