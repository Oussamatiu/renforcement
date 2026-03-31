<?php

// 10.Déclarez la classe CompteBancaire avec 3 attributs private : $titulaire, $iban, $solde
// 11. Écrivez le constructeur avec les 3 paramètres (solde initial = 0 par défaut si non fourni)
// 12.Ajoutez les getters : getTitulaire(), getIban(), getSolde()
// 13.Ajoutez la méthode deposer($montant) : valider que $montant > 0, puis ajouter au solde
// 14.Ajoutez la méthode retirer($montant) : valider que $montant > 0 ET que le solde est
// suffisant, sinon afficher "Solde insuffisant"
// 15.Ajoutez la méthode afficherInfos() qui affiche toutes les infos du compte
// 16.Instanciez 2 comptes, effectuez plusieurs dépôts et retraits, vérifiez que les validations
// fonctionnent

class CompteBancaire{
    private $titulaire;
    private $iban;
    private $solde;

    public function __construct($titulaire , $iban ,$solde = 0)
    {
        $this->titulaire = $titulaire;
        $this->iban = $iban;
        $this->solde = $solde;
    }

    public function getTitulaire(){
        return $this->titulaire;
    }
    public function getIban(){
        return $this->iban;
    }
    public function getSolde(){
        return $this->solde;
    }
    public function deposer($montant){
    if($montant < 0){
        echo 'montant doit positive';
    }else{
        $this->solde += $montant;
    }
    }
    public function retirer($montant){
       if($montant < 0){
         echo 'montant doit positive';
       }else if($this->solde < 0){
        echo 'Solde insuffisant';
       }else{
        $this->solde -= $montant;
       }
    }
    public function afficherInfos(){
        echo "$this->titulaire $this->iban $this->solde \n";
    }
    
}

$c1 = new CompteBancaire("fg", 999);
$c1->afficherInfos();
$c2 = new CompteBancaire('fdg',456,33333);
$c2->afficherInfos();
$c1->deposer(-4);