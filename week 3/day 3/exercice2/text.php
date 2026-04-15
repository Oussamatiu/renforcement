<?php
require_once 'Vehicule.php';
require 'Voiture.php';
require 'Camionnette.php';
require 'Moto.php';

$catalogue = [
    new Voiture("Toyota", "Corolla", 2022, 200000),
    new Voiture("BMW", "X5", 2019, 500000),
    new Moto("Yamaha", "MT-07", 2018, 80000),
    new Camionnette("Ford", "Transit", 2021, 300000, 1200)
];


foreach($catalogue as $v){
    echo $v->getDescription() . " ". $v->getPrixFinal() . "\n"; 
}

$somme  = 0;
foreach($catalogue as $v){
    $somme += $v->getPrixFinal();
}
$num = $somme / count($catalogue);
echo "moyen is :" . $num ;


$var = Vehicule::getMostExpensive($catalogue);

echo $var->getDescription();