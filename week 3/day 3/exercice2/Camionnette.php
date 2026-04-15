<?php

class Camionnette extends Vehicule {
    private $chargeUtile;

    public function __construct($marque, $model, $annee, $prixBase , $chargeUtile)
    {
        parent::__construct($marque, $model, $annee, $prixBase);
        $this->chargeUtile = $chargeUtile;
    }
    public function getPrixFinal(): float
    {
        $malus = $this->chargeUtile * 0.10;
        return round($this->prixBase * $malus , 2);
    }
    public function getDescription()
    {
      return "marque {$this->marque}";
    }
}