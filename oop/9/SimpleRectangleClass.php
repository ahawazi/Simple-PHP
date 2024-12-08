<?php

class Rectangle {
    // Private properties
    private $width;
    private $height;

    // Constructor to initialize properties
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Method to calculate area
    public function area() {
        return $this->width * $this->height;
    }

    // Method to calculate perimeter
    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }

    // Method to set dimensions
    public function setDimensions($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Method to get dimensions
    public function getDimensions() {
        return "Width: {$this->width}, Height: {$this->height}";
    }
}

// Testing the Rectangle class
$rectangle = new Rectangle(5, 4); // Create a new rectangle with width 5 and height 4

// Output the area and perimeter
echo "Rectangle Area: " . $rectangle->area() . "\n"; // Outputs: Rectangle Area: 20
echo "Rectangle Perimeter: " . $rectangle->perimeter() . "\n"; // Outputs: Rectangle Perimeter: 18
echo "Dimensions: " . $rectangle->getDimensions() . "\n"; // Outputs: Dimensions: Width: 5, Height: 4

// Optionally, you can set new dimensions
$rectangle->setDimensions(10, 6);
echo "Updated Dimensions: " . $rectangle->getDimensions() . "\n"; // Outputs: Updated Dimensions: Width: 10, Height: 6