<?php
require_once 'Bien.php';

class Appartement extends Bien {
    private $etage;
    private $hasBalcon;
    private $charges;
    
    public function __construct($id, $surface, $adresse, $prixBase , $etage ,$hasBalcon ,$charges)
    {
        parent::__construct($id, $surface, $adresse, $prixBase);
        $this->etage = $etage;
        $this->hasBalcon = $hasBalcon;
        $this->charges = $charges;
    }
    public function calculerPrix(): float
    {
        return round($this->prixBase + ($this->etage * 500) + ($this->hasBalcon ? 3000 : 0),2);
    }
    public function estDisponible(): bool
    {
        return $this->prixBase > 0;
    }
    public function getDescription()
    {
        $prash = parent::getDescription();
        return $prash . ' Appt etage ' . $this->etage . ($this->hasBalcon ?  ' + balcon' : '') ;
    }
}

 $a = new Appartement(1, 65, '12 rue de la Paix', 150000, 3, true, 120);
echo $a->calculerPrix();