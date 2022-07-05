
<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';



var_dump(Car::ALLOWED_ENERGIES);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);
echo "<br>";
$car = new Car('green', 4, 'electric');
echo "<br>";
echo $car->forward();
echo "<br>";
var_dump($car);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$truck = new Truck("Blue",6,'electric',300);
echo "<br>";
echo $truck->forward();
echo "<br>";
echo $truck->brake();
echo "<br>";
echo $truck->Capacity(150);
echo "<br>";
echo $truck->Capacity(300);