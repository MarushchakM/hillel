<?php
    require_once __DIR__ . "/function.php";

    echo 'Write you message: ';
    $msg = fgets(STDIN);

    getMsg('log.php', $msg);

    $readLastLog = readLastLog('log.php');
    echo 'You last massage: ' . $readLastLog;

?>