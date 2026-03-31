<?php

// 1. Créez produit.php et déclarez la classe Produit avec les 3 attributs private : $nom, $prix,
// $stock
// 2. Ajoutez le constructeur __construct($nom, $prix, $stock) qui initialise les 3 attributs
// 3. Ajoutez les getters : getNom(), getPrix(), getStock()
// 4. Ajoutez le setter setPrix($prix) avec validation : refuser les prix négatifs
// 5. Ajoutez le setter setStock($stock) avec validation : refuser un stock < 0
// 6. Ajoutez la méthode afficher() qui affiche : "[nom] — [prix]€ (stock : [stock])"
// 7. Instanciez 2 produits différents et appelez afficher() sur chacun
// 8. Testez setPrix(-5) — vérifiez que le message d'erreur s'affiche
// 9. Testez getPrix() et getNom() — vérifiez que les valeurs correctes sont retournées


class Produit {
    private $nom;
    private $prix;
    private $stock;

    public function __construct($nom , $prix ,$stock)
    {
       $this->nom = $nom;
       $this->prix = $prix;
       $this->stock =$stock;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function getStock(){
        return $this->stock;
    }
    public function setPrix($prix){
      if($prix < 0){
         return 'prix doit positive';
      }
      $this->prix = $prix;
    }
    public function setStock($stock){
      if($stock < 0){
         return 'prix doit positive';
      }
      $this->stock = $stock;
    }
    public function Afficher(){
        echo "$this->nom — $this->prix € (stock : $this->stock)\n";
    }

}

$p1 = new Produit("iphone", 67, 90); 
$p2 = new Produit("redmi", 67, 90); 

$p1->Afficher();
$p2->Afficher();

echo $p1->setPrix(-5);
echo "\n";
echo $p1->getNom();
