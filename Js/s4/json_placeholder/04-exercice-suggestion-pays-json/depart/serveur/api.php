<?php

require 'data.php';     // La liste des pays

// Récupération du paramètre de recherche (query string de la requête HTTP GET).
$result = [];

 if($_GET['search'] != ""){
    foreach($countries as $key => $val){
        if(stristr($val, $_GET['search'])){
            $result[] = $val;
        }
    }
}
echo json_encode($result);