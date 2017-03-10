<?php
//Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
//xx<br>
//xxxx<br>
//xxxxxx<br>
//xxxxxxxx<br>
//xxxxxxxxxx</p>

$x = 'X';
$count = 1;
while ($count < 11) {
    $count++;
    $x .= 'X';
    if (!($count % 2)) {
        echo $x, "<br>";
    }
}
