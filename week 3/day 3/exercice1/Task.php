<?php
// class Task { private $id; private $description; private $estimatedHours; }
// 
// • → Task : constructeur + getters + méthode isBig($threshold) qui retourne
// true si estimatedHours > $threshold
//



class Task {
    private $id;
    private $description;
    private $estimatedHours;

    public function __construct($id , $description , $estimatedHours)
    {
       $this->id = $id;
       $this->description = $description;
       $this->estimatedHours = $estimatedHours;
    }

    public function __get($name){
        return $this->$name;
    }

    public function isBig($threshold){
        if($this->estimatedHours < $threshold){
            return false;
        }
        return true;
    }

}