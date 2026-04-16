<?php
require_once 'Bien.php';
class LocalCommercial extends Bien {
    private $activiteAutorisee;
    private $loyer;

    public function __construct($id, $surface, $adresse, $prixBase, $activiteAutorisee, $loyer)
    {
        parent::__construct($id, $surface, $adresse, $prixBase);
        $this->activiteAutorisee = $activiteAutorisee;
        $this->loyer = $loyer;
    }
    public function calculerPrix(): float
    {
        return round( $this->prixBase * 1.15,2);
    }
    public function estDisponible(): bool
    {
        return $this->loyer > 0 && !empty($this->activiteAutorisee);
    }
    public function calculerRentabilite(){
        
        return ($this->loyer * 12 ) / $this->calculerPrix() * 100 . " %";
    }
    public function getDescription()
    {
        return parent::getDescription() . ' Local commercial ' . $this->activiteAutorisee . ' -- loyer ' . $this->loyer . '£/mois';
    }
}

