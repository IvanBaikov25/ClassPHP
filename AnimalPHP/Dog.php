
<?php

require_once 'Animal.php';

class Dog extends Animal
{
 private string $breed;

 public function __construct(string $name, int $age, string $breed)
 {
  parent::__construct(name: $name, age: $age, species: "Собака");
  $this->breed = $breed;
 }

 public function makeSound(): void
 {
  echo "Гав-гав!\n";
 }

 public function getInfo(): string
 {
  return parent::getInfo() . ", Порода: {$this->breed}";
 }
}
