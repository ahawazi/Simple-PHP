//Objects: An instance of a class. Instances of classes.
<?php
class Animal {
    // Attributes
    public $name;
    // Method
    public function speak() {
        return "I am an animal.";
    }
}
// Creating an object
$dog = new Animal();
$dog->name = "Buddy";
echo $dog->speak(); // Outputs: I am an animal.
?>


//Attributes (Properties) : Attributes represent the data or state of an object. Properties holding data for objects.
<?php
class Car {
    public $make;
    public $model;
    public $year;
    public function getDetails() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}
$myCar = new Car();
$myCar->make = "Toyota";
$myCar->model = "Corolla";
$myCar->year = 2020;
echo $myCar->getDetails(); // Outputs: 2020 Toyota Corolla  
?>


//Methods: Methods are functions defined in a class that operate on the object's attributes. Functions that operate on the data.
<?php
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }
}
$calc = new Calculator();
echo $calc->add(5, 3); // Outputs: 8
?>


//Encapsulation: Encapsulation restricts direct access to some of an object's components and can prevent unintended interference.
//It usually involves using private or protected attributes and providing public methods to access them. Protecting object data with visibility keywords.
<?php
class BankAccount {
    private $balance;
    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return "Deposited: $amount. New balance: {$this->balance}";
        }
        return "Deposit amount must be positive.";
    }
    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount(1000);
echo $account->deposit(500); // Outputs: Deposited: 500. New balance: 1500
?>


//Inheritance: Inheritance allows a class (child class) to inherit properties and methods from another class (parent class).
//Mechanism to create a new class based on an existing class.
<?php
class Vehicle {
    public function start() {
        return "Vehicle started";
    }
}
class Bike extends Vehicle {
    public function ringBell() {
        return "Bike bell rung";
    }
}
$bike = new Bike();
echo $bike->start(); // Outputs: Vehicle started
echo $bike->ringBell(); // Outputs: Bike bell rung
?>


//Polymorphism: Polymorphism allows methods to do different things based on the object that it is acting upon.
This can be achieved through method overriding. Ability to call the same method on different objects, each responding in its own way.
<?php
class Animal {
    public function speak() {
        return "Animal speaks";
    }
}
class Dog extends Animal {
    public function speak() {
        return "Bark";
    }
}
class Cat extends Animal {
    public function speak() {
        return "Meow";
    }
}
$animals = [new Dog(), new Cat()];
foreach ($animals as $animal) {
    echo $animal->speak() . "\n"; // Outputs: Bark and then Meow
}
?>


//Interfaces: An interface defines a contract that implementing classes must follow.
//They ensure that certain methods are implemented. Define a contract for classes to implement.
<?php
interface Shape {
    public function area();
}

class Rectangle implements Shape {
    private $width;
    private $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function area() {
        return $this->width * $this->height;
    }
}
$rectangle = new Rectangle(5, 10);
echo $rectangle->area(); // Outputs: 50
?>


//Traits: Traits are a mechanism for code reuse in single inheritance languages like PHP.
They allow you to include methods in multiple classes.Reusable methods that can be shared across classes.
<?php
trait CanFly {
    public function fly() {
        return "I can fly!";
    }
}
class Bird {
    use CanFly;
}
class Airplane {
    use CanFly;
}
$bird = new Bird();
$airplane = new Airplane();
echo $bird->fly(); // Outputs: I can fly!
echo $airplane->fly(); // Outputs: I can fly!
?>
