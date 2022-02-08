<?php

require_once 'lib/database.php';
require_once 'models/cocktail.php';

// Récupération de tous les cocktails stockés en base de données
$cocktails = listerCocktails();

// Affichage du template du back-office
include 'templates/back_office.phtml';