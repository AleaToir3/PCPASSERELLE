<?php


// Récupération de tous les cocktails stockés en base de données

include 'lib/database.php'; 
include 'models/cocktail.php';
$resCocktails = allCocktail();
include 'templates/index.phtml';



            

