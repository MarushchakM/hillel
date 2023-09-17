<?php
/**
 * @param string $fname
 * @param string $content
 * @return void
 */
function getMsg(string $fname, string $content) : void{
    $filePath = __DIR__ . '/' .$fname;
    $file = fopen($filePath, 'a+');
    fwrite($file, $content);
    fclose($file);
}

/**
 * @param string $fname
 * @return string
 */
function readLastLog(string $fname) : string{
    $filePath = __DIR__ . '/' .  $fname;
    $file = fopen($filePath, 'r');
    $fread = fread($file, filesize($filePath));
    $arrey = explode(PHP_EOL, $fread);
    $nthLog = count($arrey) - 2;
    return $arrey[$nthLog] . PHP_EOL;
}
?>