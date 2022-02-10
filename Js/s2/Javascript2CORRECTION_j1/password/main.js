/*
 * L'objectif de l'exercice est d'avoir un champ de saisie de mot de passe
 * qui donne la possibilité d'afficher la saisie par le biais d'une icône sur
 * laquelle on clique (typiquement un oeil qui s'ouvre puis se ferme). C'est
 * important d'un point de vue UX afin de permettre l'utilisateur de vérifier
 * sa saisie surtout lorsque celle-ci est complexe (majuscules puis minuscules, etc).
 */

// ---- VARIABLES ET CONSTANTES GLOBALES

let icon; // L'objet DOM représentant la balise <i>
let input; // L'objet DOM représentant la balise <input>
let show = false;

icon = document.querySelector("i");
input = document.getElementById("login");

function click() {
  // if(show){ // if (show === true)
  // icon.classList.toggle("fa-eye-slash");

  if (!show) {
    // if (show === false)
    input.type = "text";
    icon.classList = "far fa-eye-slash";
  } else {
    input.type = "password";
    icon.classList = "far fa-eye";
  }
  show = !show;
}

icon.addEventListener("click", click);
