<?php

use App\Utils\Autoloader;
use App\Entity\Peugeot;
use App\Entity\Renault;
use App\Entity\User;

include_once './src/Utils/Autoloader.php';

Autoloader::autoload();

$peugeot404 = new Peugeot();
$renaultSCenic = new Renault();
$rachid = new User();
$rachid->setPseudo('Rachid EDJEKOUANE');

echo $peugeot404->boot() . '<br>';
echo $renaultSCenic->boot() . '<br>';

echo $peugeot404->start($rachid);

echo $renaultSCenic->start($rachid);

// Product::class est une constante magique qui retourne le namespace de la classe
// echo Product::class;
