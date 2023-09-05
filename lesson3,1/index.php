<?php

$a = 1;
$b = 2;
$c = 1.1;
$d = 1.5;
$e = 'Str';
$f = '2';
$g = true;
$k = false;
$l = null;
$m = [1, 2, '2'];
$msg = [];

$msg[] = $a < $b;
$msg[] = $a >= $b;

$msg[] = $a >= $c;
$msg[] = $a < $d;
$msg[] = $e === $f;
$msg[] = $b == $f;

$msg[] = $a <= $e;
$msg[] = $b < $f;
$msg[] = $b <= $f;

$msg[] = $k == $l;
$msg[] = $k === $l;

$msg[] = $m[0] < $m[1];
$msg[] = $m[1] == $m[2];
$msg[] = $m[1] === $m[2];

$msg[] = $m[0] < $m[1] || $a > $b;
$msg[] = $m[0] < $m[1] && $a > $b;

$msg[] = $a <= $m[0];
$msg[] = $a < $m[0];




var_dump($msg);