<?php

class MainControler
{
    public function result(Figure $figure)
    {
        $figure->area();
        $figure->perimeter();
    }

    public function display(Figure $figure)
    {
        $figure->displayArea();
        $figure->displayPerimetr();
        $figure->displayValues();
    }
}