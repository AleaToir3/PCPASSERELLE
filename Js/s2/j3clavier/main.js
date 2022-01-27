// // Liste des touches du clavier.
// const TOUCHE_BAS    = 40;
// const TOUCHE_DROITE = 39;
// const TOUCHE_GAUCHE = 37;
// const TOUCHE_HAUT   = 38;

// https://developer.mozilla.org/en-US/docs/Web/API/KeyboardEvent/keyCode#value_of_keycode

// const btn = document.getElementById('changement-couleur')
// const carre = document.getElementById('rectangle')
// function onClickButton()
// {
//     // Changer la couleur du rectangle lorsqu'on clique sur le bouton (regarder le CSS).
// btn.addEventListener('click',function(e){
//     carre.classList.toggle("autre-couleur");})
//     // console.log( window.getComputedStyle(carre).getPropertyValue("height"))
// }
// function onKeyDown(event)
// {
//     // Les gestionnaires d'évènements reçoivent un objet event avec les informations sur ce qu'il s'est passé.

//     // Par exemple pour les souris : https://developer.mozilla.org/fr/docs/Web/API/MouseEvent
//     // Dans notre cas c'est pour le clavier : https://developer.mozilla.org/fr/docs/Web/API/KeyboardEvent

//     // 1- Rechercher le rectangle.

//     // 2- Gérer les 4 touches du clavier fléchées pour déplacer en pixels le rectangle, en utilisant la propriété CSS left ou top.
//     // 2-1 Pour chaque touche il faut récupérer la position avec https://developer.mozilla.org/fr/docs/Web/API/Window/getComputedStyle
//     // 2-2 Il faut ajouter ou soustraire à chaque fois quelques pixels supplémentaires, en utilisant la propriété DOM style du rectangle.
//     windows.addEventListener('keydown',function(e){
//         // console.log(e);
//     // let actuelle =  document.getElementById('rectangle').offsetTop;
//     // console.log("actuelle : " + actuelle);
//     // let nouvelle = actuelle + 20;
//     // document.getElementById('rectangle').style.top = nouvelle+"px";
//     // if(e.key == ArrowDown)

//        let aaa = document.getComputedStyle(carre) 
//         // carre.style.top= parseInt(aaa+=50)+"px";
//         console.log(aaa);

//         })
   
// }
// onClickButton();
// onKeyDown();


// // 1- Rechercher le bouton
// // 2- Installer un gestionnaire d'évènements clic dessus, qui emmène vers onClickButton
// // 3- Installer un gestionnaire d'évènements sur toute la page, pour détecter les touches du clavier

// Liste des touches du clavier.
// Liste des touches du clavier.
const TOUCHE_BAS = 40;
const TOUCHE_DROITE = 39;
const TOUCHE_GAUCHE = 37;
const TOUCHE_HAUT = 38;
const DECALAGE = 40;

const rectangle = document.getElementById("rectangle");

function onClickButton(e) {
  rectangle.classList.toggle("autre-couleur");
}

function onKeyDown(e) {
  let left;
  let top;
  let rectCSS = window.getComputedStyle(rectangle);

  switch (e.keyCode) {
    case TOUCHE_BAS:
        top= parseInt(rectCSS.top);
        rectangle.style.top = `${top + DECALAGE}px`;
        
      break;
    case TOUCHE_DROITE:
      left = parseInt(rectCSS.left);
       console.log(window.innerWidth)
          console.log(rectangle.clientWidth)
          console.log( rectCSS.left)
      if(window.innerWidth - rectangle.clientWidth - 
        
        left > DECALAGE){
         
          rectangle.style.left = `${left + DECALAGE}px`;
      }

      break;
    case TOUCHE_GAUCHE:
      left = parseInt(rectCSS.left);
      if (left > 0){
          rectangle.style.left = `${left - DECALAGE}px`;
        }
      break;
    case TOUCHE_HAUT:
        top= parseInt(rectCSS.top);
        if(top > 0){
            rectangle.style.top = `${top - DECALAGE}px`;
        }
      break;
  }

}

const button = document.getElementById("changement-couleur");
button.addEventListener("click", onClickButton);
document.addEventListener("keydown", onKeyDown);