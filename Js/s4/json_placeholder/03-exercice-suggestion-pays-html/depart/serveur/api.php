<?php

require 'data.php';     // La liste des pays

// Récupération du paramètre de recherche (query string de la requête HTTP GET).

/*
 * Exemple de requête HTTP GET :
 *
 * /api.php?country=Fra 
 *      ==> $_GET['country'] vaudra 'Fra'
 *
 * Va renvoyer comme résultat au moins 'France'
 */

 //var_dump($_GET['search']);

 $result = null;

 if($_GET['search'] != ""){
    foreach($countries as $key => $val){
        if(stristr($val, $_GET['search'])){
            $result .= '<li>'.$val.'</li>';
        }
    }
}

 if($result == ""){
    $result .= '<li>Aucun résultats</li>';
 }

// Recherche de la chaîne de caractères demandée (par exemple 'fra') dans le pays spécifié.

// Renvoie la réponse HTTP au format HTML.
echo $result;