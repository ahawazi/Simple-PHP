<?php

class Person
{
    public string $name;
    public int $age;

//    1:
    public ?float $salary;

//    2:
//    private ?float $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$p = new Person('John Doe', '18', null);

echo $p->name;
echo $p->age;
//2:
//echo $p->salary;

echo '<pre>';
var_dump($p);
echo '</pre>';