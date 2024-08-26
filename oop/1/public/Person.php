<?php

namespace public;
class Person
{
    public string $name;
    public int $age;
    public ?float $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}