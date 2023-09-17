<?php
    require_once __DIR__ . "/function.php";

    $fWorck = 'log.txt';
    echo 'Write you message: ';
    $msg = fgets(STDIN);

    getMsg($fWorck, $msg);

    $readLastLog = readLastLog($fWorck);
    echo 'You last massage: ' . $readLastLog;

?>