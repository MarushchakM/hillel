<?php
$br = PHP_EOL;

$arr = [];
//В даному випадку на мою думку функція мусе бути в середині циклу
for($i = 1; $i <= 30; $i++){
    $arr[] = mt_rand(1, 100);
}
//var_dump($arr);


//Роблю двома циклами для пошуку мінімального значення відштовхуючись від максимального
$max = 0;
foreach ($arr as $value){
    if($value > $max){
        $max = $value;
    }
}

$min = $max;
foreach ($arr as $value){
    if($value < $min){
        $min = $value;
    }
}
echo $max. $br . $min . $br;
// Те саме тільки за допомогою функцій
echo index . phpmax($arr) . $br;
echo index . phpmin($arr) . $br;


$arrOrder = [];
$count = count($arr);
$nom = $max;

for($k = 0; $k < $count; $k++) {
    foreach ($arr as $i => $value) {
        if ($value <= $nom) {
            $nom = $value;
            $key = $i;
            $val = $value;
        }
    }

    $arrOrder[] = $val;

    $nom = $max;
    unset($arr[$key]);
}
//Функція гуглиться дуже легко, а на те щоб додуматись як написати без функції і гугла пішло 4 години)
//sort($arr);

var_dump($arrOrder);