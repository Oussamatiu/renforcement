<?php 
require_once 'Bien.php';
class Maison extends Bien {
    private $nbPieces;
    private $hasJardin;
    private $surfaceJardin;

    public function __construct($id, $surface, $adresse, $prixBase , $nbPieces ,$hasJardin , $surfaceJardin)
    {
        parent::__construct($id, $surface, $adresse, $prixBase);
        $this->nbPieces = $nbPieces;
        $this->hasJardin = $hasJardin;
        $this->surfaceJardin = $surfaceJardin;
    }
    public function calculerPrix(): float
    {
       return $this->prixBase + ($this->nbPieces * 8000) + ($this->hasJardin ? $this->surfaceJardin * 150 : 0);
    }
    public function estDisponible(): bool
    {
        return ($this->nbPieces >= 1 && $this->prixBase > 0);
    }
    public function getDescription()
    {
        return parent::getDescription() . 'Maison '. $this->nbPieces . ' pieces ' . ($this->hasJardin ? '+ jardin' : '');
    }

}
$m = new Maison(2, 120, '5 av Victor Hugo', 280000, 5, true, 200.0);
echo $m->calculerPrix();