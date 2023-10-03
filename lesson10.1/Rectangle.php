<?php

class Rectangle extends Figure
{
    private float $width;
    private float $height;

    protected array $allParam;
    protected float $area;
    protected float $perimetr;


    public function __construct(float $width, float $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getAllParam(): array
    {
        $this->allParam = [
            'width' => $this->width,
            'height' => $this ->height
        ];
        return $this->allParam;
    }

    public function setWidth($width): void
    {
        if(!$this->checkProperty($width)){
            throw new Exception('Invalid width');
        }
        $this->width = $width;
    }

    public function setHeight($height): void
    {
        if(!$this->checkProperty($height)){
            throw new Exception('Invalid height');
        }
        $this->height = $height;
    }

    public function area(): float
    {
        $this->area = $this->getWidth() * $this->getHeight();
        return $this->area;
    }

    public function perimeter(): float
    {
        $this->perimetr = ($this->getWidth() * 2) + ($this->getHeight() * 2);
        return $this->perimetr;
    }
}