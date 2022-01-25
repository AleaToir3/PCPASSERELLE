/*
 * L'objectif de l'exercice est de permettre de changer l'image de l'ampoule par une
 * ampoule allumée ou éteinte, au fur et à mesure qu'on clique sur le bouton à côté.
 * Le bouton doit également changer avec l'action qui va se produire si on clique dessus.
 */

// ---- VARIABLES ET CONSTANTES GLOBALES

let lightbulb; // L'objet DOM représentant la balise <img>
let toggleButton; // L'objet DOM représentant la balise <button>
let on = false;

lightbulb = document.getElementById("lightbulb");
toggleButton = document.getElementById("toggle-button");

toggleButton.addEventListener("click", function () {
  toggleButton.classList.toggle("boutonAllume");
  if (toggleButton.textContent === "Allumer la lumière") {
    toggleButton.textContent = "Eteindre la lumière";
    lightbulb.src = "./images/on.png";
  } else {
    toggleButton.textContent = "Allumer la lumière";
    lightbulb.src = "./images/off.png";
  }

  // if(on === false ){
  //     toggleButton.textContent = "Eteindre la lumière";
  //     lightbulb.src = "./images/on.png";
  // }else{
  //     toggleButton.textContent = "Allumer la lumière";
  //     lightbulb.src = "./images/off.png";
  // }
  // on = !on;
});
