<?php

/**
 * @param int|float $radius
 * @param $pi
 * @return int|float
 */
function circleArea(int|float $radius, $pi = M_PI) : int|float {
    $r2 = $radius ** 2;
    return $pi * $r2;
}

echo circleArea(7) . PHP_EOL;

/**
 * @param int|float $numeric
 * @param int $deg
 * @return int|float
 */
$numeric = 2;
function power(int|float &$numeric, int $deg = 2){
    $numeric **= $deg;
}


function power2(int|float $numeric, int $deg = 2) : int|float {
    return $numeric ** $deg;
}

echo power2($numeric) . PHP_EOL;