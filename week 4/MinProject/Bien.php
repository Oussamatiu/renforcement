<?php

abstract class Bien {
    protected $id;
    protected $surface;
    protected $adresse;
    protected $prixBase;

    public function __construct($id , $surface ,$adresse ,$prixBase)
    {
        $this->id = $id;
        $this->surface = $surface;
        $this->adresse = $adresse;
        $this->prixBase = $prixBase;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function setPrixBase($p){
        if($p <= 0 ){
            return "prix doit positive";
        }
        $this->prixBase = $p;
    }
    abstract public function calculerPrix():float;
    abstract public function estDisponible():bool;

    public function getDescription(){
        return "Bien #{$this->id} {$this->surface}m² a {$this->addresse}";
    }

}