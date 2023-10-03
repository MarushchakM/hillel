<?php

require_once "MainControler.php";
require_once "Figure.php";
require_once "Rectangle.php";
require_once "Circle.php";

$rectangle = new Rectangle(400, 200);
$circle = new Circle(400);

$controler = new MainControler;
$controler->result($rectangle);
$controler->display($rectangle);

$controler->result($circle);
$controler->display($circle);
