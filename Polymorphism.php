<?php
// Animal Class
abstract class Animal
{
    // Abstract method that must be implemented by derived classes
    abstract public function makeSound(): string;
}


// Dog Class
class Dog extends Animal
{
    public function makeSound(): string
    {
        return "Bark!";
    }
}


// Cat Class
class Cat extends Animal
{
    public function makeSound(): string
    {
        return "Meow!";
    }
}

// Cow Class
class Cow extends Animal
{
    public function makeSound(): string
    {
        return "Moo!";
    }
}




$animals = [
    new Dog(),
    new Cat(),
    new Cow()
];

foreach ($animals as $animal) {
    // Demonstrating polymorphism: calling the same method on different objects
    echo get_class($animal) . ": " . $animal->makeSound() . "<br>";
}