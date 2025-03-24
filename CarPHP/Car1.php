<?php

require_once 'Car.php';

$myCar = new Car("Lada", "Priora", 2019, 35000);

echo $myCar->getInfo() . "\n";

$myCar->drive(1500);
echo "После поездки: " . $myCar->getInfo() . "\n";
echo "Возвращенный пробег: " . $myCar->getMileage() . " км\n";
