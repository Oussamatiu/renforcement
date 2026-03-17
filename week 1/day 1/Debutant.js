let taches = [];

taches.push("coder","tester","deployer");

console.log(taches);

taches.unshift("analyser");
 value = taches.shift();
 console.log(value);

taches.splice(1,1,"Revue de code");
console.log(taches);

taches.splice(1 ,0 , 'Documenter');
console.log(taches);

const prenoms = ['Alice', 'Bob', 'Clara', 'David', 'Eva'];

prenoms.forEach((prenom, index)=> {
       console.log(index+1 ,prenom);
});

let prenomsLength = [];

prenoms.forEach(prenom =>{
    prenomsLength.push(prenom.length);
})

console.log(prenomsLength);

prenomsLength.forEach(length =>{
    if(length >= 3){
        console.log(length);
    }
})
const temperatures = [0, 15, 22, 35, -5, 100];

const Fahrenheit = temperatures.map(f => f * 9/5 +32);
console.log(Fahrenheit);



let decriptions = Fahrenheit.map(f =>{
    if( f >= 30){
        return "Chaud"
    }
    else if( f< 0){
        return "Froid"
    }else{
        return "Tempere"
    }
}
)
console.log(decriptions);

let temperaturesStatut = Fahrenheit.map((f,index) => {return {
    cel : f,
    status : decriptions[index]
}});
console.log(temperaturesStatut);

const mots = ['chat','cheval','chien','lion','chameau','cobra','loup','chevre'];


let motsCh = mots.filter(m => {if(m.startsWith("ch")){
    return m;
}});
console.log(motsCh);

let motsPlus5 = mots.filter(m => m.length > 5);
console.log(motsPlus5);

let motsChPlus5 = motsCh.filter(m => m.length > 5);
console.log(motsChPlus5);

const catalogue = [
{ ref: 'A01', nom: 'Stylo bille', prix: 1.20 },
{ ref: 'A02', nom: 'Cahier A4', prix: 3.50 },
{ ref: 'A03', nom: 'Surligneur', prix: 2.10 },
{ ref: 'A04', nom: 'Post-it', prix: 3.80 },
{ ref: 'A05', nom: 'Ciseaux', prix: 6.30 },
];

let produit = catalogue.find( c => c.ref == 'A03')
console.log(produit);
let indexProduit = catalogue.findIndex(c => c.nom == "Cahier A4");
console.log(indexProduit);

let secondProduct = catalogue.find( c => c.ref == 'A99')??"adapte" ;

console.log(secondProduct);

const notes = [14, 8, 17, 11, 15, 9, 18, 12];

let somme = notes.reduce((acc , n)=> acc + n ,0) ;
console.log(somme);
let moy = notes.reduce((acc , n)=> acc + n ,0)/notes.length;
console.log(moy);

let max = notes.reduce((acc , n) => n > acc ? n :acc ,notes[0] );
console.log(max);

let num = notes.reduce((acc , n) => n > moy ? acc+1 : acc ,0 );
console.log(num);



