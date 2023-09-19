<?php
    include_once 'function.php';
$fibonachi = generatorFibonachi(21);

foreach ($fibonachi as $value){
    echo $value . PHP_EOL;
}