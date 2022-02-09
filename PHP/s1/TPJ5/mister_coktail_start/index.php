<?php


// Récupération de tous les cocktails stockés en base de données

include 'lib/database.php'; 
include 'models/cocktail.php';
$resCocktails = allCocktail();
$allfamily = Family();
include 'templates/index.phtml';
?>
