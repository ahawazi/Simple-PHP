<?php

// Interface: Defines a contract for calculating the area, which must be implemented by any class that uses this interface.
interface Shape {
    public function area(); // Method to calculate area
}

// Trait: Provides reusable methods for setting and getting the color of shapes.
trait CanColor {
    protected $color;
    
    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

// Base class: Implements the Shape interface and uses the CanColor trait. It has private attributes for width and height, and a method to calculate the area.
class Rectangle implements Shape {
    use CanColor; // Using the trait

    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height; // Calculate area
    }
}

// Another class: Also implements the Shape interface and uses the CanColor trait, with a method to calculate the area of the circle.
class Circle implements Shape {
    use CanColor; // Using the trait

    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * ($this->radius ** 2); // Calculate area
    }
}

// Base class for 3D shapes : Inherits from Rectangle, using its constructor to set the dimensions for a cube. It adds a new method to calculate volume.
class Cube extends Rectangle {
    public function __construct($side) {
        parent::__construct($side, $side); // Call the parent constructor
    }

    public function volume() {
        return $this->area() * $this->width; // Volume of the cube
    }
}

// Creating objects of the classes: Instances of Rectangle, Circle, and Cube are created.
$rect = new Rectangle(10, 5);
$circle = new Circle(7);
$cube = new Cube(3);

// Setting colors using the trait: Sets colors using the methods defined in the CanColor trait.
$rect->setColor("Red");
$circle->setColor("Blue");

// Output results: Calls methods to calculate and display the area and volume.
echo "Rectangle Area: " . $rect->area() . "\n"; // Outputs: Rectangle Area: 50
echo "Rectangle Color: " . $rect->getColor() . "\n"; // Outputs: Rectangle Color: Red

echo "Circle Area: " . $circle->area() . "\n"; // Outputs: Circle Area: 153.9380400259
echo "Circle Color: " . $circle->getColor() . "\n"; // Outputs: Circle Color: Blue

echo "Cube Volume: " . $cube->volume() . "\n"; // Outputs: Cube Volume: 27

// Classes and Objects: Rectangle, Circle, and Cube are classes, and instances like $rect, $circle, and $cube are objects.
// Attributes: Private properties hold data related to each shape.
// Methods: Functions that allow interaction with the object's data.
// Encapsulation: Private attributes and public methods control access to object data.
// Inheritance: Cube inherits from Rectangle.
// Polymorphism: Both Rectangle and Circle implement the area() method but behave differently.
// Interfaces: The Shape interface ensures that all shapes implement the area() method.
// Traits: The CanColor trait allows shapes to have color attributes with shared methods.
