<?php
/**
 * @param int $numeric1
 * @param int $numeric2
 * @param callable|null $func
 * @return float|int
 */
    function myFunction (int $numeric1, int $numeric2, callable $func = null){
        if($func){
            return $func($numeric1, $numeric2);
        }else{
            return $numeric1 * $numeric2;
        }
    }


    echo myFunction(2, 2, function (int $num1, int $num2){
        return $num1 . PHP_EOL . $num2 . PHP_EOL;
    });
    echo myFunction(2, 2) . PHP_EOL;