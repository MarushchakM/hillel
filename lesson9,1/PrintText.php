<?php
    class PrintText
    {
        protected string $text;

        public function __construct(string $text)
        {
            $this->text = $text;
        }
        
        public function print() : void 
        {
            echo ucfirst(strtolower($this->text)) . PHP_EOL;
        }
    }