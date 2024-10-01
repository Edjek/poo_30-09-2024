<?php

include_once './Animal.php';
include_once './Dog.php';

$droopy = new Dog('Droopy', 12, 'race');

var_dump($droopy);
echo $droopy->description();
