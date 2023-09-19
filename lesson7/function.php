<?php
/**
 * @param int $numeric
 * @return Generator
 */
    function generatorFibonachi(int $numeric): Generator{
        yield $a = 1;
        yield $b = 1;
        $c = 0;
        while($c < $numeric){
            if($c < $numeric){
                $c = $a + $b;
                $a = $b;
                $b = $c;
                yield $c;
            }else{
                exit;
            }
        }
    }
