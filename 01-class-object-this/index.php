<?php

include_once './User.php';

$rachid = new User();


$rachid->firstName = 'Rachid ';
$rachid->lastName = 'EDJEKOUANE';
$rachid->hello();


$eleve = new User();
$eleve->firstName = 'John';
$rachid->lastName = 'DOE';
echo $eleve->firstName;
