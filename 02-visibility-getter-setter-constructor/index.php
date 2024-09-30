<?php

include_once './Car.php';

$car = new Car();

$car->setModel('Audi');
echo $car->getModel();

