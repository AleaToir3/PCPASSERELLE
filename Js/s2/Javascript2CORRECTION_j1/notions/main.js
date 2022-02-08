const h1 = document.getElementById("titre-page");

const section = document.querySelector(".contenu");

const achats = ["PS5", "Mac", "Chaussures"];

const ul = document.getElementById("liste-achats");

for (let element of achats) {
  console.log(element);
  ul.innerHTML += `<li>${element}</li>`;
}

// const bouton = document.querySelector(".bouton");
// console.log(bouton.textContent);
// function clickBouton(e){
//     console.log(e);
//     section.classList.toggle("d-none");
//     h1.classList.toggle("color-red");
// }

function clickDocument(e){
    console.log('%c⧭', 'color: #ff0000', e);
    console.log(e.target.textContent);
}

document.addEventListener('click', clickDocument)





// for(let index in achats){
//     console.log(achats[index]);
// }

// achats.forEach(function (item, index) {

//     console.log("ITEM", item);
//     console.log("INDEX", index);
// })
