<?php
    include_once 'function.php';
$a = generatorFibonachi(21);

foreach ($a as $value){
    echo $value . PHP_EOL;
}