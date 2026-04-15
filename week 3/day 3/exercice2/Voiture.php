<?php

class Voiture extends Vehicule {

    private $fraisMiseEnRoute = 150;
    public function __construct($marque, $model, $annee, $prixBase)
    {
        return parent::__construct($marque, $model, $annee, $prixBase);
    }
    
    public function getPrixFinal():float
    {
        return $this->prixBase + $this->fraisMiseEnRoute;
    }
    public function getDescription()
    {
        echo "marque is $this->marque"  ;
    }
}