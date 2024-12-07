<?php

namespace private;
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

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$p = new Person('John Doe', 20, null);
echo $p->name . '<br>';
echo $p->age . '<br>';
echo $p->getSalary() . '<br>';
$p->setSalary(30) . '<br>';
echo $p->getSalary() . '<br>';

echo '<pre>';
var_dump($p);
echo '</pre>';