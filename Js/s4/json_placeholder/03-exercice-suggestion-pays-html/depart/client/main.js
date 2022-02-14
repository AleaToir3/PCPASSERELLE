/*
 * L'objectif de l'exercice est de permettre à l'utilisateur de commencer à saisir
 * un nom de pays (une partie du nom que ce soit au début, au milieu ou à la fin du nom)
 * et progressivement d'afficher sous le champ de saisie une liste de suggestions des
 * pays possibles qui correspondent partiellement ou totalement à la saisie.
 * Cette liste est renvoyée par un serveur à distance en PHP qu'il faut implémenter.
 * Il s'agit donc cette fois de faire et la partie front / client HTTP
 * et la partie back / serveur HTTP : on voit le JavaScript "dialoguer" avec le PHP grâce
 * au protocole HTTP.
 * 
 * Il faut implémenter deux versions de l'exercice : une qui dialogue en HTML
 * entre le client et le serveur, le JavaScript récupère directement le résultat HTML à afficher.
 * L'autre version dialogue en JSON entre le client et le serveur, le JavaScript va construire
 * lui-même l'affichage à partir des données JSON.
 */

// ---- VARIABLES ET CONSTANTES GLOBALES

let input;          // L'objet DOM représentant la balise <input>
let suggest;        // L'objet DOM représentant la balise <ul>

input = document.getElementById('country');

input.addEventListener('keyup', recherche);

function recherche(event){
    
    let param = event.currentTarget.value;

    window.fetch('../serveur/api.php?search='+param)
    .then(function(httpReponse){
        return httpReponse.text();
    })
    .then(function(reponse){
        let ul = document.getElementById('suggest');
        ul.innerHTML = reponse;
    })
}



// ---- CODE PRINCIPAL

// Recherche du champ de saisie et de la balise <ul> qui va contenir les résultats.

// Installation d'un gestionnaire d'évènement sur la saisie au clavier dans le champ.
