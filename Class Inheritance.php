<?php

// Base class for all shapes
abstract class Shape
{
    // Method to calculate area, which will be implemented by subclasses
    abstract public function area();
}
//Circle class Inheritance
class Circle extends Shape
{
    private $radius;

    // Constructor to initialize radius
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Implementing the area method for Circle
    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

//rectangles Class Inheritance
class Rectangle extends Shape
{
    private $width;
    private $height;

    // Constructor to initialize width and height
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementing the area method for Rectangle
    public function area()
    {
        return $this->width * $this->height;
    }
}


// Instantiate a Circle with a radius of 5
$circle = new Circle(5);

echo "The area of the circle is: " . $circle->area() . "<br>";
// Output: The area of the circle is: 78.54


// Instantiate a Rectangle with width 4 and height 6
$rectangle = new Rectangle(4, 6);
echo "The area of the rectangle is: " . $rectangle->area() . "<br>";
 // Output: The area of the rectangle is: 24
