<?php
class MainControler
{
    public function index(LogIntarface $log)
    {
        try{
            $log->log('Тест', Level::Add);
        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
        
    }
}