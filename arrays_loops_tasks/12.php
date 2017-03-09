<?php
//Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.
// Какое число получится? Посчитайте количество итераций,
// необходимых для этого (итерации — это количество проходов цикла),
// и запишите его в переменную $num.


//Method 1
$n = 1000;
$num = 0;
while ($n > 50) {
    $n = $n / 2;
    $num +=1;
}
echo "Quantity of attempts: $num <br>";
echo "The last number: $n <br>";



//Method 2
$i = 0;
for ($n = 1000; $n >=50; $i++) {
    $n = $n / 2;
}
echo "Quantity of attempts: $i <br>";
echo "The last number: $n <br>";
