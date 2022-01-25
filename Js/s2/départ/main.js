// ------- FONCTIONS
const selection = document.querySelectorAll('li');
let tabElement = [];
let paragra = document.querySelector('.selected-count')

// document.addEventListener('click',function(e){
//     console.log(e.target) 
//     let cible = e.targe.classList;
// })
for (let index = 0; index < selection.length; index++) {
    selection[index].addEventListener('click',function(e){
    selection[index].classList.toggle("selected");
    // if(tabElement.indexOf(e) != -1){
    //     tabElement.push(e);
    //     console.log('click click !')
    // }
    let  liselected = document.querySelectorAll('.selected');
    console.log(liselected.length);
    if(liselected.length > 0){
        paragra.textContent= ` ${liselected.length} fichier selection`;
    }else{
        paragra.textContent= ` aucune  selection`;

    }
    
})    
}

// selection.addEventListener('click',function(e){
//     console.log(e);
//     selection.classList.toggle("selected");
//     tabElement.push(e);
// })

function onClickItem(event)
{
    /*
     * event.currentTarget représente la balise qui a déclenché l'évènement
     * sur lequel on a installé le gestionnaire d'évènement de clic.
     */

    // 1- Récupération du fichier (le <li>) qui a déclenché l'évènement.
    // 2- Activation ou désactivation de la classe CSS de sélection.
    // 3- Recherche de tous les éléments sélectionnés.
    // 4- Mise à jour du message indiquant le nombre de fichiers sélectionnés.
}


// ------- CODE PRINCIPAL -------

// 1- Recherche de tous les <li> de la liste de fichiers.
// 2- Recherche du paragraphe <p> affichant le nombre d'éléments sélectionnés.
// 3- Boucle sur la liste de fichiers pour installer un gestionnaire d'évènement de clic (fonction onClickItem).