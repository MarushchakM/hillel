<?php 

require_once 'Level.php';

class FileLoger implements LogIntarface
{
    
    public function log(string $message, Level $level)
    {
        if(strlen($message) > 2){
            $log = date("Y-m-d H:i:s") . '|' . $message . '|' . $level->value . PHP_EOL;
            file_put_contents(__DIR__ . '/log.txt', $log, FILE_APPEND);
        } else {
            throw new Exception ('Довжина повідомлення занадто коротка');
        }
        
    }
}