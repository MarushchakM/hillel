<?php
require_once 'MainControler.php';
require_once 'LogerIntarface.php';
require_once 'FileLoger.php';
require_once 'DBLoger.php';

$fileLoger = new FileLoger;

$loger = new MainControler;

$loger->index($fileLoger);