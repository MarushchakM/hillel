<?php
    require_once 'PrintText.php';
    require_once 'PrintUpperText.php';

    $text = 'some text';
    $print = new PrintText($text);
    $print->print();

    $printUppecase = new PrintUpperText($text);
    $printUppecase->print();
