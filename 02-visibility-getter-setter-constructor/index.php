<?php

include_once './Car.php';

// - new est mot clé permettant d'effectuer une instanciation.
// - Une class peut produire plusieurs objets. Nous pouvons donc effectuer plusieurs instanciations 'new'

$car = new Car('Audi', 'bleue');

var_dump($car);
die;


$car->setYearRelease(2004);
echo $car->displayInformation();
echo $car->getModel();
