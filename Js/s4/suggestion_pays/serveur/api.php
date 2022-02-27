<?php

require 'data.php';     // La liste des pays



// Récupération du paramètre de recherche (query string de la requête HTTP GET).




$findme = $_GET['search'];
$traitement="";
if($findme != ""){
    foreach ($countries as $countrie) {
        if(str_contains($countrie,$findme)){
            $traitement .=  '<li>' . $countrie .'</li>'; 
        }
    }
}else{
    $traitement = "Champ vide";
}
$result = null;

echo $traitement;


// -------- JSON  -------

