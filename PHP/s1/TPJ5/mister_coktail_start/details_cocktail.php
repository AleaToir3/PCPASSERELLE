<?php


include 'lib/database.php';
include 'models/cocktail.php';

$resCocktail=oneCocktail();
include 'templates/details_cocktail.phtml';
// Chargement des autres programmes PHP dont on dépend.


// Récupération du cocktail stocké en base de données

