<?php

// Instantiating a car

require_once'Car.php';
require_once'Vehicle.php';

$car = new Car('green', 5, 'electric');
echo $car->forward();



// Instantiating a bicycle:

require_once 'Bicycle.php';

$bike = new Bicycle("blue", 1);
echo $bike->forward();
echo 'Bike speed: ' . $bike->getCurrentSpeed() . ' km/h' . PHP_EOL;
echo $bike->brake();
echo 'Bike speed: ' . $bike->getCurrentSpeed() . ' km/h' . PHP_EOL;


// Instantiating a truck

require_once 'Truck.php';

$truck = new Truck("black", 4, "fuel", 500);
echo 'Stock capacity: ' . $truck->getStockCapacity() . PHP_EOL;
echo $truck->forward(). PHP_EOL;
echo $truck->setLoad(500);
echo $truck->loadIsFull();
echo $truck->setCurrentSpeed(20);
echo 'Truck speed: ' . $truck->getCurrentSpeed() . ' km/h' . PHP_EOL;
echo $truck->brake() . PHP_EOL;

$dumpTruck = new Truck ("yellow", 2, "electric", 1000);
echo 'Stock capacity: ' . $dumpTruck->getStockCapacity() . PHP_EOL;
echo $dumpTruck->forward(). PHP_EOL;
echo $dumpTruck->setLoad(500);
echo $dumpTruck->loadIsFull();
echo $dumpTruck->setCurrentSpeed(20);
echo 'Truck speed: ' . $dumpTruck->getCurrentSpeed() . ' km/h' . PHP_EOL;
echo $dumpTruck->brake();



