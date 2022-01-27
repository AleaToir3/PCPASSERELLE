/*
 * L'objectif de l'exercice est de réaliser un diaporama de photos qui s'affichent les
 * unes après les autres, toutes les 5 secondes. Puis ensuite de revenir à la première
 * photo et de recommencer, à l'infini. C'est ce qu'on appelle un carousel de photos.
 */

// ---- VARIABLES ET CONSTANTES GLOBALES

let currentPhoto;       // Numéro de la photo courant affichée (indice dans le tableau ci-dessous)
let photos = document.querySelectorAll('.diaporama img');             // Tableau d'objets DOM représentant les balises <img>


let btnNext = document.querySelector(".bNext");
let btnBefore = document.querySelector(".bBefore");
let btnPlay = document.querySelector(".bPlay");
let btnStop = document.querySelector(".bStop");
let btnReset = document.querySelector(".bReset");
let diaporama;

// ---- FONCTIONS


let i = 0;
function start() {
    diaporama = setInterval(() => {
        console.log("START",i);

        if(i < photos.length-1 || i == 0){
            next()
            i++;
        }else{
            i=0;
            before();
        } 
    }, 2000);   
}
function next() {
    photos[i].classList.toggle('visible');
    photos[i+1].classList.toggle('visible');
}    

function before() {
    photos[photos.length-1].classList.toggle('visible');
    photos[i].classList.toggle('visible');
}

photos[0].classList.toggle('visible');

btnNext.addEventListener('click',function(e) {
    console.log("NEXT",i);
      
    if(i < photos.length-1 || i == 0){
        next()
    i++;
    }else{
        i=0;
        before();
    } 
})

btnBefore.addEventListener('click',function() {
  if(i == 0){
    photos[i].classList.toggle('visible');
    i = photos.length -1;
    photos[i].classList.toggle('visible');
    }else{
        photos[i].classList.toggle('visible');
        photos[i-1].classList.toggle('visible');
        i--;
    }
})
btnStop.addEventListener('click',function () {
    console.log("ARRETE",i);
    clearInterval(diaporama);
    console.log("ARRETE",i);
})
btnPlay.addEventListener('click',function () {
    console.log("Play",i);
    start();
})

btnReset.addEventListener('click',function () {
    console.log("RESET",i);
    let i = 0;
    start();
})
start();