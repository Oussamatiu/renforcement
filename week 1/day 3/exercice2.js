import { catalogue } from "./exercice1.js";

// Implementez rechercherProduits(catalogue, filtres) avec ces criteres optionnels :
// • texte : nom contient ce texte (insensible a la casse)
// • categories : tableau -- le produit appartient a l'une de ces categories
// • prixMin / prixMax : fourchette de prix
// • enStock : boolean -- seulement les produits avec stock > 0
// • noteMin : note >= noteMin

function rechercherProduits(catalogue ,filtres){
    if(filtres.texte){return catalogue.filter(p => p.nom.includes(filtres.texte));} 
    if(filtres.categories && filtres.categories.length > 0){
      return catalogue.filter(p => filtres.categories.includes(p.cat))      
    }
    if(filtres.prixMin && filtres.prixMax){
       return catalogue.filter(p => p.prix > filtres.prixMin && p.prix < filtres.prixMax);
    }
    if(filtres.enStock){
        return catalogue.filter(p => p.stock > 0);
    }
    if(filtres.noteMin){
        return catalogue.filter(p => p.note >= filtres.noteMin);
    }

}
rechercherProduits(catalogue, {
enStock:true, noteMin:4.5 })