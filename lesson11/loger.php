<?php
trait Loger 
{
    public function log(string $masage): string
    {
        return date('Y-m-d h:i:s') . '|' . $masage . PHP_EOL;
    }
}