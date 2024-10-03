<?php

include_once './src/Entity/Product.php';

use App\Entity\Product;


$grillePain = new Product('grille pain Tefal', 'blabla');

echo $grillePain->getDescription();
echo Product::class;