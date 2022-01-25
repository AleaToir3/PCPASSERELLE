// students=[];
// students[0] = 'Cyril';
// students[1] = 'Loevan';
// students[2] = 'Riri';
// students[3] = 'Fifi';
// students[4] = 'Loulou';
// students[5] = 'Pixou';


// console.log(students.length);


// let index;
// for(index =0; index < students.length; index++)
// {

// document.write(`L'etudiant : <h1>${students[index]}</h1> est la !`);

// }

/*
 * L'objectif de l'exercice est de rechercher automatiquement la phrase la plus longue dans
 * le tableau de phrases indiquées ci-dessous. Cela doit fonctionner peu importer le nombre
 * de phrases, l'ordre des phrases, si on ajoute ou on supprime des phrases du tableau, etc.
 * Lorsque la phrase la plus longue est trouvée, afficher cette phrase sur la page ainsi
 * que sa longueur.
 */

const phrases =
[
    "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
    "Aenean commodo ligula eget dolor. Aenean massa.",
    "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
    "Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.",
    "Nulla consequat massa quis enim.",
    "Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.",
    "In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.",
    "Nullam dictum felis eu pede mollis pretium.",
    "Integer tincidunt. Cras dapibus.",
    "Vivamus elementum semper nisi.",
    "Aenean vulputate eleifend tellus.",
    "Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.",
    "Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.",
    "Phasellus viverra nulla ut metus varius laoreet.",
    "Quisque rutrum. Aenean imperdiet.",
    "Etiam ultricies nisi vel augue.",
    "Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.",
    "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
    "Aenean commodo ligula eget dolor. Aenean massa.",
    "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.",
    "Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.",
    "Nulla consequat massa quis enim.",
    "Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.",
    "In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.",
    "Nullam dictum felis eu pede mollis pretium.",
    "Integer tincidunt. Cras dapibus.",
    "Vivamus elementum semper nisi.",
    "Aenean vulputate eleifend tellus.",
    "Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.",
    "Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.",
    "Phasellus viverra nulla ut metus varius laoreet.",
    "Quisque rutrum. Aenean imperdiet.",
    "Etiam ultricies nisi vel augue.",
    "Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.",
    "Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit ipsuminus max.",
    "Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.",
    "Maecenas nec odio et ante tincidunt tempus.",
    "Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.",
    "Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.",
    "Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.",
    "Sed consequat, leo eget bibendum sodales, augue velit cursus nunc."
];

// let i = 0;
// let nbchar=0;
// let varLaPlusLongue=0;

// for(i;i < phrases.length;i++){
//     if(phrases[i].length >= nbchar){        
//         nbchar = phrases[i].length;
//         varLaPlusLongue = i;
//     }
// }
// document.write(`<p><strong>La phrase la plus long  est </strong>:
// <span class = "bbb"> ${ phrases[varLaPlusLongue] } </span>
// <br><br> elle contient " <span class = "aaa">${nbchar} </span>" caractere </p>

// <style>
// .bbb{
//     font-weight: 100;
// }
// .aaa{
//   color:red;
// }
// </style>
// `);




// *********** Leonardo Fibonacci ***********

// Exercices BONUS
/**
 * Exercice 1 : Suite de Fibonacci
 *
 * Créer une boucle pour créer la suite de fibonacci
 * exemples : 0,1,1,2,3,5,8,13,21,34,...
 */

// let i = 0;
// let j = 0;
// let k = 1;
// for(i; i < 21;i++){  
//     document.write("la valeur de i est : "+j+"<br>");
//     k = k + j;
//     j = j+k;
// }


/**
 * Exercice 2 : échiquier de Sissa
 *
 * On place un grain de riz (ou de blé) sur la première case d'un échiquier. 
 * Si on fait en sorte de doubler à chaque case le nombre de grains de la case précédente 
 * (un grain sur la première case, deux sur la deuxième, quatre sur la troisième, etc.), 
 * combien de grains de riz obtient-on au total (il y a 64 cases sur un échéquier)
 * Objectif : écrire le nombre de grain qu'il y aura sur chacune des cases
 */

//  let i = 0;
//  let j=1;
//  for(i; i < 64;i++){
   
//     document.write("la valeur de a la case "+i+"est : "+j+"<br>");
//     j = j *2 ;
// }
// La boucle do while

// let reponse;

// do {
// 	reponse = parseFloat(window.prompt('un chiffre pls'));
// }
// while(isNaN(reponse) === true );

// let min = 1;
// let max = 5;
// let random = Math.floor(Math.random() * (max - min)) + min;
// let nbdemander ;
// let nbEssaie = 0;

// min = parseFloat(prompt('Entre le min du chiffre a trouver'));
// max = parseFloat(prompt('Entre le max du chiffre a trouver'));
// random = Math.floor(Math.random() * (max - min)) + min;
// console.log(random);

// do{
//     nbEssaie++;
//     nbdemander = parseFloat(prompt('Devine le nb :'));

// }while(random !== nbdemander);
// document.write('tu a trouver le chiffre :'+nbdemander+' en '+ nbEssaie+" d'essaie")


let nbTAb = 5 ;
let iTAb = 0 ;

let nbCol = 3 ;
let iCol = 0 ;

let nbRow = 0 ;
let iRow = 0 ;


// nbTAb = prompt("Combien de TAb voulez vous ?");
// nbCol = prompt("Combien de Col voulez vous ?");
// nbRow = prompt("Combien de Row voulez vous ?");

// document.write('<table> a </table>')
// document.write('<table> a </table>')
// document.write('<table> a </table>')


// document.write("<tbody>");
//     document.write("<table>");
//         for (let index1 = 1; index1 < 5; index1++) {
//             document.write( "<tr>");
            
//             for (let index = 1; index < 5; index++) {
//                 document.write("<td>" +index+ "*" +index1+ "=" +index*index1+" </td>");
//             }
//             document.write( "</tr>");
//         }
//     document.write("</tbody>");
// document.write("</table>");


// JEU DE CARTE

// La boucle do while

// BONUS : à partir de ces 2 tableaux générer toutes les cartes possibles ♠️ ♣️ ♥️ ♦️
let colors = ['♥️Coeur♥️', '♦️Pique♦️', '♣️Trefle♣️', '♠️Carreau♠️'];
let values = ['As', 'Roi', 'Dame', 'Valet', 10, 9, 8, 7, 6, 5, 4, 3, 2];

for(let i = 0; i < values.length;i++){
    document.write(`<div class="packet">`);

    for (let j = 0; j < colors.length; j++) {
        document.write(`<div class="Card">`+values[i] + colors[j]+`</div>`);
    }
    document.write("<br>")
    document.write(`</div>`);
}