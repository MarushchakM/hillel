<?php

abstract class Figure 
{
    abstract public function area();
    abstract public function perimeter();
    abstract public function getAllParam();

    protected float $area;
    protected float $perimetr;
    protected array $allParam;

    protected function checkProperty(float $property): bool
    {
        if($property <= 0){
            return false;
        }
        return true;
    }

    public function displayArea()
    {
        echo $this->area . PHP_EOL;
    }

    public function displayPerimetr()
    {
        echo $this->perimetr . PHP_EOL;
    }

    public function displayValues()
    {
        print_r($this->allParam);
    }
}