<?php 

class Moto extends Vehicule {
    private $remiseAncienne = 0.05;
    public function __construct($marque, $model, $annee, $prixBase){
        parent::__construct($marque, $model, $annee, $prixBase);
    }
    public function getPrixFinal():float
    {
        if($this->annee < 2020){
            return $this->prixBase - ( $this->prixBase * $this->remiseAncienne);
        }
        return $this->prixBase;
    }
    public function getDescription()
    {
        
    }
}