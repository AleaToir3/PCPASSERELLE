/*
 * L'objectif de l'exercice est de permettre de changer l'image de l'ampoule par une
 * ampoule allumée ou éteinte, au fur et à mesure qu'on clique sur le bouton à côté.
 * Le bouton doit également changer avec l'action qui va se produire si on clique dessus.
 */

// ---- VARIABLES ET CONSTANTES GLOBALES

let lightbulb = document.getElementById('lightbulb');          // L'objet DOM représentant la balise <img>
let toggleButton = document.getElementById('toggle-button');       // L'objet DOM représentant la balise <button>



// ---- FONCTIONS
toggleButton.addEventListener("click",function() {
    if(toggleButton.textContent == "Allumer la lumière"){
        lightbulb.src = "./images/on.png";
        toggleButton.textContent = "TATAAAAA !!!";
    }else{
        lightbulb.src = "./images/off.png";
        toggleButton.textContent = "Allumer la lumière";

    }
});

// ---- VARIABLES ET CONSTANTES GLOBALES

let lightbulb;          // L'objet DOM représentant la balise <img>
let toggleButton;       // L'objet DOM représentant la balise <button>
let on = false;

    // if(on === false ){
    //     toggleButton.textContent = "Eteindre la lumière";
    //     lightbulb.src = "./images/on.png";
    // }else{
    //     toggleButton.textContent = "Allumer la lumière";
    //     lightbulb.src = "./images/off.png";
    // }
    // on = !on;
    
})

