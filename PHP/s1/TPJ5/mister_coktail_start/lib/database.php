<?php

// function connexionMySQL($bdd)
// {

function bipbip(){
    $user = 'root';
    $pass = '';
    $bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=cocktail', $user, $pass);
    return $bdd;
}
    // Création d'une fonction de connexion à MySQL.

    // Cette fonction appelle PDO puis **renvoie** l'objet PDO représentant la connexion.
    // Cela permet alors aux autres fonctions de faires des requêtes SQL.
// }
// connexionMySQL($bdd);