<?php

// Interface : This defines a contract that any class implementing Animal must have a speak() method.
interface Animal {
    public function speak();
}

// Trait: A trait that contains a method run(). This can be reused in multiple classes.
trait CanRun {
    public function run() {
        return "Running fast!";
    }
}

// Base class : This class has a protected property $name and methods for setting and getting the name. The constructor initializes the name when creating an object.
class Creature {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Inherited class : Both Dog and Cat inherit from Creature. They implement the Animal interface and use the CanRun trait. Each class has its own version of the speak() method.
class Dog extends Creature implements Animal {
    use CanRun; // Using the trait

    public function speak() {
        return "Bark! My name is " . $this->getName();
    }
}

// Another inherited class
class Cat extends Creature implements Animal {
    use CanRun; // Using the trait

    public function speak() {
        return "Meow! My name is " . $this->getName();
    }
}

// Creating objects: Instances of Dog and Cat are created with names.
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

// Using the objects: Calls the speak() method for both objects, demonstrating polymorphism (different behavior based on the object type).
echo $dog->speak(); // Outputs: Bark! My name is Buddy
echo "\n";
echo $dog->run();   // Outputs: Running fast!
echo "\n";
echo $cat->speak(); // Outputs: Meow! My name is Whiskers
echo "\n";
echo $cat->run();   // Outputs: Running fast!

// Summary:
// Classes and Objects: Dog and Cat are classes, and $dog and $cat are objects.
// Encapsulation: The $name property is protected and accessed via methods.
// Inheritance: Dog and Cat inherit from Creature.
// Polymorphism: speak() behaves differently for each class.
// Interfaces: Enforced a contract for speak().
// Traits: Reused the run() method across both classes.