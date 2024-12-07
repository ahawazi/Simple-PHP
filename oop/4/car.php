<?php

// Class definition: This defines a class named Car. A class is a blueprint for creating objects.
class Car {
    // Attributes (properties): These are properties of the Car class, defined as private. This means they can only be accessed within the class itself. Each car object will have these attributes.
    private $make;
    private $model;
    private $year;

    // Constructor method to initialize attributes : The constructor is a special method that is called when an object is created. It initializes the attributes with the values passed as arguments.
    public function __construct($make, $model, $year) {
        $this->make = $make; // Assign the make
        $this->model = $model; // Assign the model
        $this->year = $year; // Assign the year
    }

    // Method to get car details: This method returns a string that contains the car's year, make, and model.
    public function getDetails() {
        return "{$this->year} {$this->make} {$this->model}";
    }

    // Method to start the car: This method simulates starting the car and returns a message.
    public function start() {
        return "The {$this->make} {$this->model} is starting.";
    }

    // Method to stop the car: This method simulates stopping the car and returns a message.
    public function stop() {
        return "The {$this->make} {$this->model} has stopped.";
    }
}

// Creating an object of the Car class: This line creates a new object $myCar of the Car class, initializing it with the make "Toyota", model "Corolla", and year 2020.
$myCar = new Car("Toyota", "Corolla", 2020);

// Using methods of the object: These lines call the methods of the $myCar object to display the car details, start the car, and stop the car.
echo $myCar->getDetails(); // Outputs: 2020 Toyota Corolla
echo "\n";
echo $myCar->start(); // Outputs: The Toyota Corolla is starting.
echo "\n";
echo $myCar->stop();  // Outputs: The Toyota Corolla has stopped.

// Summary :
// Classes: Car is a class that defines a blueprint for car objects.
// Objects: $myCar is an instance of the Car class.
// Attributes: make, model, and year are properties that hold data for each car.
// Methods: Functions like getDetails(), start(), and stop() define behaviors of the car.