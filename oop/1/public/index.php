<?php

use public\Student;

require_once './Person.php';
require_once './student.php';

$s = new Student("zura", '20', 1234);
echo $s->name . '<br>';
echo $s->age . '<br>';
echo $s->stId . '<br>';

//$p = new Person('John Doe', '18', null);
//echo $p->name . '<br>';
//echo $p->age . '<br>';
//echo $p->salary . '<br>';

echo '<pre>';
var_dump($s);
echo '</pre>';