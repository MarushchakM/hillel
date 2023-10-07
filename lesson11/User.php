<?php
require_once 'Loger.php';
class User 
{
    use Loger;

    public function addLog($masage){
        $content = $this->log($masage);
    }

    //Todo add business logic


}