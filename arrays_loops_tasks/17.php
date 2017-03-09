<?php
//Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы,
// а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
$list_months = ['January', 'February', 'March', 'April', 'May',	'June',	'July',	'August',
    'September', 'October',	'November',	'December'
];
$month = 'March';

foreach ($list_months as $item) {
    if ($item === $month ) {
        echo "<b> $item </b>";
    }
    else {
        echo "<p> $item </p>";
    }
}
