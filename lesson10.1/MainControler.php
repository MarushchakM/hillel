<?php

class MainControler
{
    public function result(Figure $figure)
    {
        $figure->area();
        $figure->perimeter();
        $figure->getAllParam();
    }

    public function display(Figure $figure)
    {
        $figure->displayArea();
        $figure->displayPerimetr();
        $figure->displayValues();
    }
}