/*
 * L'objectif de l'exercice est d'avoir un champ de saisie de mot de passe
 * qui donne la possibilité d'afficher la saisie par le biais d'une icône sur
 * laquelle on clique (typiquement un oeil qui s'ouvre puis se ferme). C'est
 * important d'un point de vue UX afin de permettre l'utilisateur de vérifier
 * sa saisie surtout lorsque celle-ci est complexe (majuscules puis minuscules, etc).
 */

// ---- VARIABLES ET CONSTANTES GLOBALES

let icon = document.querySelector("i");  

// L'objet DOM représentant la balise <i>
let input = document.getElementById("login");  
let boubou = true ;

// L'objet DOM représentant la balise <input>
console.log("DEBUT",boubou );



// ---- FONCTIONS

icon.addEventListener('click',function(){
    if(boubou){
        icon.classList = "far fa-eye-slash";
        boubou = false;
        console.log("dedans IF",boubou );
    }else {
        icon.classList = "far fa-eye";
        boubou = true;
        console.log("dedans ELSE",boubou );
    }
})

input.addEventListener('click',function(){
    console.log('bouuu');
})

// ---- CODE PRINCIPAL

