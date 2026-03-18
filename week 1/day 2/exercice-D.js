const fiche = { prenom:'Bob', nom:'Dupont', age:34, ville:'Lyon' };

console.log(fiche.prenom +" " + fiche.nom);

function getProp(obj , cle){
       if(!(cle in obj)){
        return "Inconnu";
       }
       return obj[cle];
} 

console.log(getProp(fiche , "ville"));
console.log(getProp(fiche , "salaire"));

function renommerCle(obj , ancienne , nouvelle){
     let newObj = {...obj};
     if(ancienne in newObj){
        newObj[nouvelle] = newObj[ancienne];
        delete newObj[ancienne];
     }
     return newObj;
}
const result = renommerCle(fiche, "ville", "city");

console.log(result);


const inventaire = {
stylo: { prix: 1.5, stock: 200 },
cahier: { prix: 3.5, stock: 85 },
regle: { prix: 0.8, stock: 0 },
compas: { prix: 8.5, stock: 12 },
};

console.log(Object.values(inventaire));

Object.entries(inventaire).forEach(([produit , total])=> {
    console.log(`${produit} : ${total.prix * total.stock}`)
})
// const prixSeuls = Object.fromEntries(
//     inventaire.map(p => [p.nom , p.prix])
// );

// console.log(prixSeuls);

const commande = {
    id: 'CMD-001',
    client: { nom: 'Dupont', email: 'dupont@mail.com' },
    total: 18.50,
    livree: false
};

const { id , total } = commande;

const { client: {nom}} = commande;
console.log(nom);

const {total : montant , livree : estLiverr} = commande;

console.log(montant);

function resumeCommande({id , nom , total}){
      console.log("Commande "+id+" - "+nom+" - "+ total+" EUR");
}

resumeCommande({id ,nom ,total});


