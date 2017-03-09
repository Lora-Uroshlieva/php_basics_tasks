<?php
//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
// С помощью цикла foreach выведите эти слова в столбик

$array = ['html', 'css', 'php', 'js', 'jq'];
foreach ($array as $item) {
    echo "<p>", $item, "</p>";
}
