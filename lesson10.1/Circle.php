<?php

class Circle extends Figure
{
    private float $radius;
    
    protected float $area;
    protected float $perimetr;

    

    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        if(!$this->checkProperty($radius)){
            throw new Exception('Invalid radius');
        }
        $this->radius = $radius;
    }

    public function area(): float
    {
        $this->area = pi() * ($this->getRadius() ** 2);
        return $this->area;
    }

    public function perimeter(): float
    {
        $this->perimetr = 2 * pi() * $this->getRadius();
        return $this->perimetr;
    }
}