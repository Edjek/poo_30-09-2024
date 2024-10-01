<?php

include_once './Animal.php';
include_once './Dog.php';

$droopy = new Dog('Droopy', 12, 'chien de race');

echo $droopy->description();
