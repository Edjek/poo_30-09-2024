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


// Creer une class Animal
    // name
    // type
    // age initialise a 0

    // methode eat
        // retourne ' TYPE est entrain de manger'

    // methode sleep
        // retourne "NOM est entrain de dormir"


//  Creer un objet chat de type Animal et afficher ses 2 methodes