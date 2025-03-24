<?php

require_once 'Rectangle.php';

$Rectangle = new Rectangle(16.00, 5.00);
echo "Площадь: " . $Rectangle->getArea() . "\n";
echo "Периметр: " . $Rectangle->getPerimeter() . "\n";
