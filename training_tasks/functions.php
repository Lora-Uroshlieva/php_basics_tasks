<?php

function _func($a, $b, $c = 0) {
    $result =  $a + $b + $c;
    echo $result, '<br><br>';
    var_dump(__FUNCTION__, '<br><br>');
    var_dump(__FILE__, '<br><br>');
    return $result;
}
_func(1, 2, 4);

echo '<p>-----------------------------------------------</p>';

function full_funk() {
    $arg = func_get_args();
    var_dump($arg);
}
full_funk(1, 3, 'ghghghf', 6, [1, 2], 5);
full_funk();

echo '<p>-----------------------------------------------</p>';

// Anonimus function:
$f = function ($a=null) {};


//Type-hint:

function with_type_hint(\DateTime $date, array $arr, callable $closure, string $str, int $number, float $float) {
    var_dump(func_get_args());
};
//with_type_hint(1, [1, 2], $f);


//Strong typing of data
//declare(strict_types=1);
//echo 1 + '1';


$a = 1;
if (is_string($a)) {};

echo '<p>-----------------------------------------------</p>';

//global var
$b = 5;
$c = 2;
function change_global($i) {
    global  $c;
    $c += $i;
}
change_global(6);
echo $c, '<br>';


echo '<p>-----------------------------------------------</p>';

//function in function
function outer($a) {

    $a += 2;
    $b = 2;
    return function () use($a, $b) {
        echo $a, ', ', $b;
    };
}

$internal = outer(1);
$internal();

echo '<p>-----------------------------------------------</p>';

//Розіменувати елементи масива в змінні!

list($a, $b, $c) = [1, 2, 3];

echo $c, '----', $b, '----', $a;

function toArray() {
    list($x,,$y) =  func_get_args();
    echo '<br>', 'y = ', $y, ' x = ', $x, '<br>';
}

toArray(5, 0, 10, 3, 4);