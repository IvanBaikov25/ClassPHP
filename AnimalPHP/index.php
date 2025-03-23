<?php

require 'Dog.php';
require 'Cat.php';
require 'Zoo.php';

// Создаем объекты классов Dog и Cat
$dog1 = new Dog("Бобик", 3, "Собака", "Лабрадор");
$cat1 = new Cat("Мурка", 2, "Кошка", "Черный");

// Создаем объект класса Zoo
$zoo = new Zoo();

// Добавляем животных в зоопарк
$zoo->addAnimal($dog1);
$zoo->addAnimal($cat1);

// Выводим информацию о всех животных
echo "Список животных в зоопарке:" . PHP_EOL;
$zoo->listAnimals();

// Вызываем звуки животных
echo "Звуки животных:" . PHP_EOL;
$zoo->animalSounds();
