<?php

$br = PHP_EOL;

echo "Введіть ваше імя" . $br;
$name = fgets(STDIN);

echo "Вітаю $name. Введіть 3 числа та дізнайтесь їхню суму і середнє арефметичне" . $br;
$number1 = fgets(STDIN);
$number2 = fgets(STDIN);
$number3 = fgets(STDIN);

$sum = $number1 + $number2 + $number3;
$middleNum = $sum / 3;
$middleNum = round($middleNum, 2);

echo "Сума ваших числ = $sum" . $br;
echo "Середнє арефметчне ваших числ = $middleNum" . $br;

