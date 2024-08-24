<?php

class Person
{
    public string $name;
    public int $age;
    private ?float $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getSalary():float
    {
    return $this->salary;
    }

    public function setSalary($salary):float
    {
        $this->salary = $salary;
    }
}

$p = new Person('John Doe', 20, null);
echo $p->name;
echo $p->age;
echo $p->getSalary();
$p->setSalary(20);
echo $p->getSalary();

echo '<pre>';
var_dump($p);
echo '</pre>';