<?php

// Interface
interface Shape {
    public function area();       // Method to calculate area
    public function perimeter();  // Method to calculate perimeter
}

// Trait
trait CanColor {
    protected $color;

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

// Class Rectangle
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

    public function perimeter() {
        return 2 * ($this->width + $this->height); // Calculate perimeter
    }
}

// Class Circle
class Circle implements Shape {
    use CanColor; // Using the trait

    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * ($this->radius ** 2); // Calculate area
    }

    public function perimeter() {
        return 2 * pi() * $this->radius; // Calculate perimeter
    }
}

// Class Cube
class Cube extends Rectangle {
    public function __construct($side) {
        parent::__construct($side, $side); // Call parent constructor
    }

    public function volume() {
        return $this->area() * $this->width; // Volume of the cube
    }
}

// Creating objects
$rectangle = new Rectangle(10, 5);
$rectangle->setColor("Red");

$circle = new Circle(7);
$circle->setColor("Blue");

$cube = new Cube(3);
$cube->setColor("Green");

// Output results
echo "Rectangle Area: " . $rectangle->area() . "\n"; // Outputs: Rectangle Area: 50
echo "Rectangle Perimeter: " . $rectangle->perimeter() . "\n"; // Outputs: Rectangle Perimeter: 30
echo "Rectangle Color: " . $rectangle->getColor() . "\n"; // Outputs: Rectangle Color: Red

echo "Circle Area: " . round($circle->area(), 2) . "\n"; // Outputs: Circle Area: 153.94
echo "Circle Perimeter: " . round($circle->perimeter(), 2) . "\n"; // Outputs: Circle Perimeter: 43.98
echo "Circle Color: " . $circle->getColor() . "\n"; // Outputs: Circle Color: Blue

echo "Cube Volume: " . $cube->volume() . "\n"; // Outputs: Cube Volume: 27
echo "Cube Color: " . $cube->getColor() . "\n"; // Outputs: Cube Color: Green