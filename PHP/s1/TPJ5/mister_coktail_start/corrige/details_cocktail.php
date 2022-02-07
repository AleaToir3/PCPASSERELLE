<?php

require_once 'lib/database.php';
require_once 'models/cocktail.php';


// Récupération du cocktail stocké en base de données
$cocktail = lireCocktail($_GET['id']);

include 'templates/details_cocktail.phtml';