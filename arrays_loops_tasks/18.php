<?php
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
//выходные дни следует вывести жирным.
$days_of_week = ['Monday', 'Tuesday', 'Thursday', 'Wednesday', 'Friday', 'Saturday', 'Sunday'];
$holiday = ['Saturday', 'Sunday'];

foreach ($days_of_week as $day) {
    if (in_array($day, $holiday)) {
        echo "<b> $day </b><br>";
    }
    else {
        echo "<p>$day</p>";
    }
}
