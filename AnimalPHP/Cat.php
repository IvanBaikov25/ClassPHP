<?php

require_once 'Animal.php';

class Cat extends Animal
{
 private string $color;

 public function __construct(string $name, int $age, string $color)
 {
  parent::__construct(name: $name, age: $age, species: "Кошка");
  $this->color = $color;
 }

 public function makeSound(): void
 {
  echo "Мяу!\n";
 }

 public function getInfo(): string
 {
  return parent::getInfo() . ", Цвет: {$this->color}";
 }
}
