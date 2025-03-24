<?php

require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Zoo.php';

$dog1 = new Dog(name: "Бим", age: 3, breed: "Бульдог");
$dog2 = new Dog(name: "Рекс", age: 5, breed: "Мопс");
$cat1 = new Cat(name: "Ириска", age: 2, color: "Черный");
$cat2 = new Cat(name: "Апельсин", age: 4, color: "Рыжий");

$zoo = new Zoo();
$zoo->addAnimal(animal: $dog1);
$zoo->addAnimal(animal: $dog2);
$zoo->addAnimal(animal: $cat1);
$zoo->addAnimal(animal: $cat2);

$zoo->listAnimals();
$zoo->animalSounds();
