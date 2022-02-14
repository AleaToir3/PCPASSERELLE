<?php

require 'data.php';     // La liste des pays



// Récupération du paramètre de recherche (query string de la requête HTTP GET).
$query = trim(strtolower($_GET['country']));    // Suppression des espaces, conversion en minuscules

/*
 * Exemple de requête HTTP GET :
 *
 * /api.php?country=Fra 
 *      ==> $_GET['country'] vaudra 'Fra'
 *      ==> $query vaudra 'fra'
 *
 * Va renvoyer comme résultat au moins 'France'
 */


$results = [];

// Est-ce qu'un paramètre de recherche a bien été fourni ?
if(empty($query) == false)
{
    // Oui, recherche de la valeur dans la liste des pays.
    foreach($countries as $country)
    {
        // Recherche de la chaîne de caractères demandée (par exemple 'fra') dans le pays spécifié.
        // Voir https://www.php.net/manual/fr/function.stristr.php
        if(stristr($country, $query) !== false)
        {
            // Cumule les résultats.
            array_push($results, $country);
        }
    }
}

// Est-ce qu'au moins un pays a été trouvé ?
if(empty($results) == true)
{
    // Non, message par défaut indiquant l'échec de la recherche.
    $results = [ 'Aucune idée !' ];
}

// Renvoie la réponse HTTP au format JSON.
header('Content-Type: application/json');
echo json_encode($results);

// Sérialisation JSON en PHP : https://www.php.net/manual/fr/function.json-encode.php