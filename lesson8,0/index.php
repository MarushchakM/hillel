<?php
require_once 'image.php';

try {
    $image = new Image('photo.jpg');
    $image->resize(500, 500)->convert(Format::Png)->save('myFlwe2');
} catch (Exception $exception){
    echo $exception->getMessage() . PHP_EOL;


}

//$image->resize(1400, 900)->convert('png')->save();





