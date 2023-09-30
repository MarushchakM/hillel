<?php
    require_once 'PrintText.php';
    class PrintUpperText extends PrintText
    {
        public function print() : void 
        {
            echo strtoupper($this->text) . PHP_EOL;
        }
    }