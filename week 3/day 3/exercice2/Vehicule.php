<?php


abstract class Vehicule
{
  protected $marque;
  protected $model;
  protected $annee;
  protected $prixBase;

  public function __construct($marque , $model , $annee , $prixBase)
  {
    $this->marque = $marque;
    $this->model = $model;
    $this->annee = $annee;
    $this->prixBase = $prixBase;
  }

  public function __get($name)
  {
    return $this->$name;
  }
  abstract public function getPrixFinal():float;
  abstract public function getDescription();
  
  public static function getMostExpensive(array $vehicules){
   
     $max = $vehicules[0];
    
     foreach($vehicules as $v){
        if($v->getPrixFinal() > $max->getPrixFinal()){
            $max = $v;
        }
     }
     return $v;

  }
}