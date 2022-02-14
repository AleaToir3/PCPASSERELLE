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

let input = document.getElementById('country');        // L'objet DOM représentant la balise <ul>
let ul = document.getElementById('suggest');        // L'objet DOM représentant la balise <ul>


// ---- FONCTIONS

//  input.addEventListener('keyup',allo);
//  function allo(e){
   
//     window.fetch('../serveur/api.php?search='+e.currentTarget.value)
//     // Première fonction : s'occupe d'analyser la réponse HTTP (gestion des erreurs etc.)
//     .then(function(httpResponse)
//     {
//         // Demande à récupérer les données de la réponse HTTP en JSON.
//         return httpResponse.text()
//     })
//     // Deuxième fonction : s'occupe de traiter les données de la réponse HTTP
//     .then(function(results) // results = les données JSON, grâce au httpResponse.json() ci-dessus
//     {
//         ul.innerHTML = results;
//  })}
// ---- CODE PRINCIPAL

// Recherche du champ de saisie et de la balise <ul> qui va contenir les résultats.

// Installation d'un gestionnaire d'évènement sur la saisie au clavier dans le champ.





// ---------- PARTI JSON ----------
input.addEventListener('keyup',allo);
 function allo(e){
   
    window.fetch('../serveur/api.php?search='+e.currentTarget.value)
    // Première fonction : s'occupe d'analyser la réponse HTTP (gestion des erreurs etc.)
    .then(function(httpResponse)
    {
        // Demande à récupérer les données de la réponse HTTP en JSON.
        return httpResponse.json()
    })
    // Deuxième fonction : s'occupe de traiter les données de la réponse HTTP
    .then(function(results) // results = les données JSON, grâce au httpResponse.json() ci-dessus
    {
        ul.innerHTML = results;
 })}