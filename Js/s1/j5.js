
/**
 * Exercice : 
 * Créer une fonction prixReduc
 * Cette foonction attend 2 parametres 
 * (le prix de la commande et le taux de reduction)
 * 
 * Demander à l'utilisateur le prix de sa commande 
 * Demander à l'utilisateur le taux de réduction
 *
 * appeler la fonction en lui envoyant les 2 parametres 
 * pensez à parseFloat le prix et parseInt le taux
 *
 * la fonction doit retourner le prix de la commande remisé.
 * Afficher le montant de la commande après remise.
 *
 * formule pour calculer le montant remisé :
 *    	prix * (1 - reduc / 100);
 
// */
// let prix = parseFloat(window.prompt("quel est le prix de la commande ?"));
// let taux = parseInt(window.prompt("quel est le taux de reduction de la commande ?"));

// function prixReduc(prix,taux){
//     return ("il reste a payer : " + prix * (1 - taux / 100 ).toFixed(2));
// }
// prixReduc(prix,taux);
// console.log(prixReduc(150,20));
// var tab = new Set();

// function  readBacket(tab){
//     document.write(tab)
// }
// function addBacket(tab){
//     tab.add(add = window.prompt("Quel article voulez vous ajouter ?"));
// }
// function removeBacket(tab) {
//     sup = window.prompt('quel valeur voulez vous sup ?');
//     tab.delete(sup);
//     // if(tab.splice(sup,1)){
     
//     // }
// }
// function findBacket(tab){
//     find = window.prompt("Quel Valeur chercher vous ?");
//     // tab.indexOf(find);
//     if(tab.has(find)){
//         console.log("L'article est present");
//     }else{
//         console.log("L'article est pas la !");
//     }
    
// }

// let choix;
// do{
//     choix =window.prompt("Que voulez faire au panier  ? 1-Voir 2-Ajouter 3-supprimer 4-verifier une valeur  ou tapez quitter");
//     switch (choix) {
//     case "1":
//         readBacket(tab);
//         break;

//     case "2":
//     addBacket(tab);
//         break;
//     case "3":
//     removeBacket(tab);
//         break;
//     case "4":
//     findBacket(tab);
//         break;
//     case "quitter":
//         break;                
//     default:
//         console.log("ERREUR re-entre une valeur ou tapez quitter")
//         break;
//     }
// }while(choix != "quitter")



// // --------------------------------------
// let choix= true;
// let piece;
// let pieces = [];
// let largeur;
// let longueur;
// let total;
// let a = "";

// function calculSuperficie(v1,v2){
// return v1*v2;
// }

// function calculSuperficieTotale(pieces){
//     let total = 0;
//     pieces.forEach(element => {
//     total+=element
// });
// return total;
// }

// do{
//     choix = window.confirm("Voulez vous entre une nouvelle piece ?");
//     if(choix){
//         largeur = window.prompt("Quel est la largeur ?");
//         longueur = window.prompt("Quel est la longueur ?");
//         piece = calculSuperficie(largeur,longueur)
//         pieces.push(piece);
//         console.log(pieces);
//     }
//     console.log("ENTRE");   
// }while(choix)
// console.log(calculSuperficieTotale(pieces));


// --------------------------------------
/* 
Choisir un jour aleatoire dans un tableau des jours
Pour obtenir une valeur entre 0 et 6 : Math.floor((Math.random()*6));
L'ia doit vous demander de lui dire quel est le lendemain du jour 
quelle à choisi (et qu'elle vous affiche dans la question du window.prompt)
vous pouvez le faire aussi avec la veille
*/
let days = ['dimanche','lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];



/**
 * Demander à l'utilisateur si il souhaite ajouter une pièce
 * si il répond "ok" (true) demander (avec 2 questions) 
 * la longueur de la piece puis la largeur de la piece
 * ajouter dans un tableau la superficie de la piece, 
 * vous devez utiliser une fonction (calculSuperficie) qui devra vous 
 * retourner cette superficie.
 *
 * Quand l'utilisateur ne souhaite plus ajouter de piece
 * afficher le tableau des superficies (console.table)
 * 
 * Ensuite afficher la surface totale vous devez utiliser 
 * une fonction (calculSuperficieTotale) pour calculer la surface totale 
 */

// let response;
// let superficie = new Array(); // ou let superficie = [];

// function calculSuperficie(longueur = 20, largeur = 10)
// {
// 	return longueur*largeur;
// }

// function calculSuperficieTotale() 
// {
// 	let total = 0;
// 	for(let index = 0; index < superficie.length; index++) {
//     	total += superficie[index];      
//     }
//     return total;
// }

// do {
// 	response = window.confirm(`Souhaitez vous ajouter une piece ?`);
//     if(response) {
//     	let longueur = window.prompt(`Quel est la longueur de la piece ?`);
//         let largeur = window.prompt(`Quel est la largeur de la piece ?`);
//         superficie.push(calculSuperficie(longueur, largeur));
//     }
// } while(response);

// // ajout du garage avec les valeurs par défaut
// superficie.push(calculSuperficie());

// document.write(`La surface totale de votre habitation est de ${calculSuperficieTotale() }m²`);
// --------------------------------------

/* 
Choisir un jour aleatoire dans un tableau des jours
Pour obtenir une valeur entre 0 et 6 : Math.floor((Math.random()*6));
L'ia doit vous demander de lui dire quel est le lendemain du jour 
quelle à choisi (et qu'elle vous affiche dans la question du window.prompt)
vous pouvez le faire aussi avec la veille
*/

let jours = ["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"]
let day = Math.floor((Math.random()*7));
let plusOuMoin = Math.random(1/2);
console.log("iA  a choisie un jours : " + jours[day]);
console.log(day);

if(plusOuMoin>1/2){
    let jourSuivant = window.prompt('quel est le jours suivants ?');

    if(day==6) jours[0]
    if(jourSuivant == jours[day+1])console.log("bonnne reponse");
    else if(day==6 && jourSuivant == "lundi")console.log("bonnne reponse");
    else console.log("et noon");   
}else{
    let jourSuivant = window.prompt('quel est le jours d avant ?');
    
    if(day==6) jours[0]
    if(jourSuivant == jours[day+ -1]) console.log("bonnne reponse");
    else if(day==0 && jourSuivant == "dimanche") console.log("bonnne reponse");
    else console.log("et noon");   
    
}




// // ::::::::: CORRECTION :::::::



// let days = ['dimanche','lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];

// do {
// 	let choiceIa = Math.floor((Math.random()*7));
    
//     // Trouver le lendemain
//     if(Math.random() > 1/2) {
//      	let response = window.prompt(`Quel est le jour suivant ${days[choiceIa]}`).toLowerCase();
//     	response = days.indexOf(response);
        
//         if(response!=-1 && (response==choiceIa+1 || (choiceIa == days.length-1 && response == 0))) 
//         {
//             window.alert('Bien joué !!!');
//         } else {
//         	window.alert('Raté !!!');
//         }
//     } 
//     // Trouver la veille
//     else {
//         let response = window.prompt(`Quel est le jour précédent ${days[choiceIa]}`).toLowerCase();
//     	response = days.indexOf(response);
//      	if(response!=-1 && (response==choiceIa-1 || choiceIa == 0 && response == days.length-1))
//         {
//             window.alert('Bien joué !!!');
//         } 
//         else {
//         	window.alert('Raté !!!');
//         }
//     }
// }
// while(window.confirm(`Souhaitez vous recommencer ?`));




