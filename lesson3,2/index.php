<?php
$br = PHP_EOL;

echo "Напишіть цифру від 1 до 7" . $br;

$value = fgets(STDIN);

switch ($value){
    case 1:
        $color = 'green';break;
    case 2:
        $color = 'red';break;
    case 3:
        $color = 'blue';break;
    case 4:
        $color = 'brown';break;
    case 5:
        $color = 'violet';break;
    case 6:
        $color = 'black';break;
    default:
        $color = 'white';
}

echo "Ваш колір " . $color . $br;


//$color = match ($value) {
//    1 => 'green',
//    2 => 'red',
//    3 => 'blue',
//    4 => 'brown',
//    5 => 'violet',
//    6 => 'black',
//    default => 'white',
//};
//
//echo "Ваш колір " . $color . $br;


//if ($value == 1){
//    $color = 'green';
//} elseif($value == 2) {
//    $color = 'red';
//}elseif($value == 3) {
//    $color = 'blue';
//}elseif($value == 4) {
//    $color = 'brown';
//}elseif($value == 5) {
//    $color = 'violet';
//}elseif($value == 6) {
//    $color = 'black';
//}else{
//    $color = 'white';
//}
//
//echo "Ваш колір " . $color . $br;