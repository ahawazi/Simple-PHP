<?php

class Car
{
    var $wheels = 4;
    var $doors = 4;

    function wheelsdoors()
    {
        return $this->wheels + $this->doors;
    }
}
 class CompactCar extends Car
 {
     var $doors = 2;
     function wheelsdoors()
     {
    return $this->wheels + $this->doors + 100;
     }
 }

 $car1 = new Car();
$car2 = new CompactCar();

echo $car1->wheels ."<br />";
echo $car1->doors ."<br />";
echo $car1->wheelsdoors() ."<br />";
echo "<br />";

echo $car2->wheels ."<br />";
echo $car2->doors ."<br />";
echo $car2->wheelsdoors() ."<br />";
echo "<br />";

//this is for get and show the parent of the class
echo "Car parent: ". get_parent_class('car') ."<br />";
echo "CompactCar parent: ". get_parent_class('CompactCar') ."<br />";
echo "<br />";

//this is for find the subclass & parent of the class, first the target and second is parent the check
echo is_subclass_of('car', 'car') ? 'true' : 'false';
echo "<br />";
echo is_subclass_of('compactCar', 'Car') ? 'true' : 'false';
echo "<br />";
echo is_subclass_of('Car', 'CompactCar') ? 'true' : 'false';
echo "<br />";

}