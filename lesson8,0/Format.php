<?php

enum Format: string
{
    case Png = 'png';
    case Jpeg = 'jpeg';
    case Jpg = 'jpg';

    public function getImageFunction()
    {
        return match ($this->value){
            'png' => 'imagepng',
            default => 'imagejpeg'
        };
    }

}