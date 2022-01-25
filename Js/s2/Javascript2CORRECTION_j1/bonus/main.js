const listeAchats = document.getElementById("liste-achats"); // sélecteur de la premiere liste, où apparaitront les checkboxs
const resumeAchats = document.getElementById("resume-achats"); //sélecteur de la seconde liste, où apparaitront, au click du bouton, la liste des éléments sélectionnés
const bouton = document.querySelector(".bouton"); //sélecteur du bouton qui validera qu'on a fini de cocher les checkboxs

const data = ["PS5", "Mac", "Chaussures"]; //Données initiales que l'on va injecter dans notre DOM

let selected = []; //tableau initialement vide, dans lequel on va ajouter/supprimer les éléments cochés

for (let index = 0; index < data.length; index++) {
  //on boucle sur les données initiales pour générer nos li
  const produit = data[index]; //PS5, Mac, ou Chaussures
  //On génère les li, en ajoutant (à l'aide du +=) chaque li correspondant aux datas dans notre ul (listeAchats);
  //Notez la valeur qui contient le produit (PS5, Mac ou Chaussures) On stocke l'index (mais on aurait tout aussi bien pu stocker le produit)
  //dans le name pour mettre en place notre label
  listeAchats.innerHTML += `<li><input type="checkbox" name="${index}" id="${produit}" value="${produit}"/><label for="${index}">${produit}</label></li>`;
}

let inputs = listeAchats.querySelectorAll("li > input"); //Une fois que, et seulement une fois que, nos inputs ont été  générés dans notre DOM, on les sélectionne

inputs.forEach(function (element) {
  //Pour pouvoir écouter le changement (coché/non coché) de nos inputs, il faut boucler dessus pour appliquer un addEventListener sur CHAQUE input
  element.addEventListener("change", function (e) {
    //element ici est bien chaque input dans la boucle, lorsque l'on change la checkbox de valeur on rentre dans la fonction, et on récupère l'evenement au passage
    if (e.target.checked) {
      // si la checkbox est cochée
      selected.push(e.target.id); //on ajoute à notre tableau selected l'identifiant du produit // ex: ["PS5", "Chaussures"]
    } else {
      //Si on décoche
      let index = selected.indexOf(e.target.id); //on récupère l'index dans le tableau selected correspondant à la valeur stockée, ici on a choisi l'id      console.log("%c⧭", "color: #aa00ff", index);
      if (index > -1) {
        // Si l'index existe(-1 pour rappel, veut dire qu'il n'est pas présent)
        selected.splice(index, 1); //on enlève le produit correspondant à cette index, et on en enlève 1 seul
      }
    }

    if (selected.length > 0) {
      //S'il y a des éléments dans mon tableau selected
      bouton.disabled = false; //Je rends actif mon bouton
    } else {
      bouton.disabled = true; //sinon je le désactive(on a dit qu'il fallait au moins 1 case cochée)
    }
  });
});

bouton.addEventListener("click", function () {
  //On écoute le click du bouton de validation
  for (let index = 0; index < selected.length; index++) {
    //Pour chaque élément dans le tableau selected, on rajoute une li à notre ul resumeAchats
    const element = selected[index];
    resumeAchats.innerHTML += `<li>${element}</li>`;
  }
});





























