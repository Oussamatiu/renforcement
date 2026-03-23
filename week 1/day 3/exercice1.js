export let catalogue = [
{ id:1, nom:'Stylo bille bleu', cat:'ecriture', prix:1.20, stock:150,
note:4.2 },
{ id:2, nom:'Stylo bille rouge', cat:'ecriture', prix:1.20, stock:0,
note:4.0 },
{ id:3, nom:'Stylo gel noir', cat:'ecriture', prix:2.50, stock:60,
note:4.7 },
{ id:4, nom:'Cahier A4 200p', cat:'papier', prix:5.50, stock:45,
note:4.8 },
{ id:5, nom:'Cahier A5 100p', cat:'papier', prix:3.20, stock:80,
note:4.3 },
{ id:6, nom:'Bloc-notes A5', cat:'papier', prix:2.80, stock:30,
note:3.9 },
{ id:7, nom:'Surligneur jaune', cat:'ecriture', prix:1.80, stock:0,
note:4.5 },
{ id:8, nom:'Surligneur rose', cat:'ecriture', prix:1.80, stock:20,
note:4.3 },
{ id:9, nom:'Ciseaux bureau', cat:'bureau', prix:6.50, stock:8,
note:3.7 },
{ id:10, nom:'Agrafeuse', cat:'bureau', prix:9.90, stock:5,
note:4.1 },
{ id:11, nom:'Post-it jaunes', cat:'papier', prix:4.20, stock:60,
note:4.6 },
{ id:12, nom:'Agenda 2025', cat:'agenda', prix:12.0, stock:15,
note:4.7 },
{ id:13, nom:'Marqueur permanent', cat:'ecriture', prix:3.10, stock:35,
note:4.4 },
{ id:14, nom:'Regle 30cm', cat:'bureau', prix:1.50, stock:90,
note:3.8 },
{ id:15, nom:'Compas de precision', cat:'bureau', prix:8.90, stock:12,
note:4.6 },
];

// 1. ajouterProduit(catalogue, produit) -- id auto (max+1), retourne nouveau tableau

function ajouterProduit(catalogue, produit) {
    const newId = Math.max(...catalogue.map(p => p.id))+1;
    const newProduct = {
        ...produit,
        id: newId
    };
    return [...catalogue, newProduct];
}

// 2. mettreAJour(catalogue, id, modifications) -- mise a jour partielle avec spread

function mettreAJour(catalogue, id ,modifications){
    const c2 = catalogue.map(p => p.id == id ? {...p,...modifications}:p);
    return c2;
}

// 3. supprimerProduit(catalogue, id)

function supprimerProduit(catalogue,id){
    const c3 = catalogue.filter(p=> p.id !== id);
    return c3;
}

// 4. getProduitById(catalogue, id) -- retourne le produit ou null

function getProduitById(catalogue , id){
    const produit = catalogue.find(p=> p.id == id);
    return produit;
}

const c1 = ajouterProduit(catalogue, { nom:'Taille-crayon', cat:'bureau',
prix:1.10, stock:200, note:4.0 });
console.log(c1.length); 
console.log(c1[c1.length-1].id); 
const c2 = mettreAJour(catalogue, 2, { stock: 50 });
console.log(c2.find(p => p.id === 2).stock); 
console.log(catalogue.find(p => p.id === 2).stock);