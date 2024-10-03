<?php

include_once './src/Entity/Product.php';

use App\Entity\Product;


$grillePain = new Product('grille pain Tefal', 'blabla');

echo $grillePain->getDescription();

// Product::class est une constante magique qui retourne le namespace de la classe
echo Product::class;
