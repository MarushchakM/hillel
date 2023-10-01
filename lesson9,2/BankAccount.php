<?php

    class BankAccount 
    {
        private float $account;
        private string $filePath;

        public function __construct(int $nomerCart)
        {
            $this->filePath = __DIR__ . '/' . $nomerCart . '.txt';
            if($this->existentAccaunt() === true){
                $this->account = $this->getNthOperation();
            } else {
                $this->account = 0;
            }
        }

        private function moneyLog()
        {
            $fopen = fopen($this->filePath, 'a+');
            $fwrite = fwrite($fopen, date("Y-m-d H:i:s") . '|' . $this->account . PHP_EOL);
            fclose($fopen);
        }

        public function pushMoney(float $money)
        {
            if($money >= 0){
                $this->account = $this->account + $money;
                $this->moneyLog();
            }else {
                throw new Exception("Сума повинна бути більше 0");
            }
        
        }

        public function getMoney(float $money)
        {
            $getMoney = $this->account - $money;
            if($getMoney >= 0){
                $this->account = $getMoney;
                $this->moneyLog();
                var_dump($this->existentAccaunt());
            }else{
                throw new Exception("Не достатньо коштів");
            }
            
        }

        private function getNthOperation() : float
        {
            $fopen = fopen($this->filePath, 'r');
            $fread = trim(fread($fopen, filesize($this->filePath)));
            fclose($fopen);
            $array = explode(PHP_EOL, $fread);
            $count = count($array) - 1;
            $nthOperation = explode("|", $array[$count]);
            return $nthOperation[1];
        }

        private function existentAccaunt() : bool
        {
            if(filesize($this->filePath) == 0){
                return false;
            }else{
                return true;
            }
        }

    }