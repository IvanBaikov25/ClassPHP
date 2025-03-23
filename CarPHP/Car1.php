<?php
require 'Car.php';
$myCar = new Car("BMW", "X5", 2020, 50000);
echo $myCar->getInfo() . PHP_EOL;
$myCar->drive(150);
echo "Обновленный пробег: " . $myCar->getMileage() . " км" . PHP_EOL;
echo $myCar->getInfo() . PHP_EOL;
