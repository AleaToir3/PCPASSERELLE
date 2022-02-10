/*
 * L'objectif de l'exercice est d'implémenter une fusée qui décolle après qu'on ait
 * cliqué sur un bouton qui déclenche un compte à rebours de 5 secondes.
 * Une fois qu'on a cliqué sur le bouton, on ne peut pas revenir en arrière ! Le bouton est désactivé.
 * Une fois le compte à zéro la fusée s'envole verticalement de la lune, de bas 
 * en haut de l'écran, progressivement, jusqu'à disparaître de l'écran.
 * Déplacer la fusée de 2 pixels en 2 pixels, puis en bonus la faire déplacer
 * de plus en plus vite.
 * Lorsqu'on clique sur la fusée, les coordonnées X, Y de la souris s'affichent dans la console.
 */

// ---- VARIABLES ET CONSTANTES GLOBALES

let bottom;             // La position verticale de la fusée en pixels, depuis le bas de l'écran
let launchButton;       // L'objet DOM représentant la balise <button>
let counter;            // L'objet DOM représentant la balise <span>

let rocket = document.querySelector(".rocket");             // L'objet DOM représentant la balise <img>
let btnCounter = document.querySelector("button");
let countdown  = document.querySelector("#command-panel > span");


// ---- FONCTIONS

btnCounter.addEventListener("click",function(e){
    btnCounter.disabled = true;
    timeur();
})

function timeur(){
    let conteur = 5;
   timeurInterval = setInterval(() => {
        if(conteur > 0 ){
            countdown.innerHTML = conteur--;
        }else{ 
            countdown.innerHTML = "Depaaarrrrrrt !!!!";
            decollage();
            clearInterval(timeurInterval);
        }
    }, 1000);
}

function decollage(){
let decalage = 2;
rocketInterval = setInterval(() => {
    if(decalage > (window.innerHeight *1.05)){
        clearInterval(rocketInterval)
    }
        decalage **= 1.06;
        console.log(rocket.style.bottom = decalage+"px")
}, 100);
}
// Le gestionnaire d'évènement de clic sur le bouton qui initie le comptes à rebours.

// 1- Il faut désactiver le bouton, quel attribut HTML permet de le faire ? En déduire le code JavaScript DOM
// 2- Il faut afficher la valeur de départ du compte à rebours pour informer l'utilisateur
// 3- Il faut initier le compte à rebours et informer l'utilisateur du temps restant en temps réel
// 4- Il faut lancer la fusée


// Le gestionnaire d'évènement de clic sur la fusée qui affiche la position de celle-ci dans la console.
// Regarder du côté de l'objet event des évènements de souris...


// La fonction qui produit l'animation de déplacement de la fusée.
// Il faut se baser sur le positionnement en CSS, voir le fichier CSS ligne 19


// ---- CODE PRINCIPAL

// Recherche de la fusée et du bouton et compteur du panneau de commandes.

// Installation d'un gestionnaire d'évènement de clic sur le bouton pour initier le compte à rebours.

// Installation d'un gestionnaire d'évènement de clic sur la fusée pour afficher sa position dans la console.