<?php
//13. Вывести таблицу умножения



//Method 1:
$numbers = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
foreach ($numbers as $i) {
    foreach ($numbers as $j){
        echo "$i * $j  = ", $i * $j, "<br>";
        if ($j == 10) {
            echo '---------------------', "<br>";
        }
    }
}


//Method 2:
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i * $j  = ", $i * $j, "<br>";
        if ($j == 10) {
            echo '---------------------', "<br>";
        }
    }
}