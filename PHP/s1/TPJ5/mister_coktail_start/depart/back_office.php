<?php

    require_once 'lib/database.php';
    require_once 'models/cocktail.php';

    // Récupération de tous les cocktails stockés en base de données
    $cocktails = listerCocktails();

    include 'templates/back_office.phtml';