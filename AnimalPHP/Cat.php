<?php

require 'Animal.php';

class Cat extends Animal {
    private string $color;

    public function __construct(string $name, int $age, string $species, string $color) {
        parent::__construct($name, $age, $species);
        $this->color = $color;
    }

    public function makeSound(): void {
        echo "Мяу!" . PHP_EOL;
    }

    public function getInfo(): string {
        return parent::getInfo() . ", Цвет: {$this->color}";
    }
}
