<?php

include_once './Car.php';

// - new est mot clé permettant d'effectuer une instanciation.
// - Une class peut produire plusieurs objets. Nous pouvons donc effectuer plusieurs instanciations 'new'

$car = new Car();

$car->setModel('Audi')->setColor('bleue')->setYearRelease(2004);

$car->setYearRelease(2004);
echo $car->displayInformation();
