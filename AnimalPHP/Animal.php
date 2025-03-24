<?php

class Animal
{
 protected string $name;
 protected int $age;
 protected string $species;

 public function __construct(string $name, int $age, string $species)
 {
  $this->name = $name;
  $this->age = $age;
  $this->species = $species;
 }

 public function makeSound(): void
 {
  echo "Животное издает звук\n";
 }

 public function getInfo(): string
 {
  return "Имя: {$this->name}, Вид: {$this->species}, Возраст: {$this->age}";
 }
}
