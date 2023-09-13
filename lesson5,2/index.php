<?php
/**
 * @param int $numeric1
 * @param int $numeric2
 * @param callable|null $func
 * @return float|int
 */
    function myFunction (int $numeric1, int $numeric2, callable $func = null) : int{
        $result = $numeric1 * $numeric2;
        if($func){
            $func($result);
        }
        return $result;
    }


    myFunction(2, 2, function ($res){
        echo $res . PHP_EOL;
    });
    myFunction(2, 2) . PHP_EOL;