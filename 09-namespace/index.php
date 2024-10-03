<?php

include_once './Product.php';

$grillePain = new Product('grille pain Tefal', 'blabla');

echo $grillePain->getDescription();