<?php

require 'Rectangle.php';
$myRectangle = new Rectangle(5.0, 3.0);
echo "Площадь прямоугольника: " . $myRectangle->getArea() . " кв. единиц" . PHP_EOL;
echo "Периметр прямоугольника: " . $myRectangle->getPerimeter() . " единиц" . PHP_EOL;
