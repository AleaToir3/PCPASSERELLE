<?php

    require_once 'lib/database.php';
    require_once 'models/cocktail.php';

    if(!empty($_POST)){
        //update en bdd
        modifierCocktail($_POST);

        header('Location:back_office.php');

    }else{
        // Récupération du cocktail stocké en base de données
        $cocktail = lireCocktail($_GET['id']);

        // Récupération de toutes les familles de cocktails stockées en base de données
        $famillesCocktails = listerFamillesCocktails();

        include 'templates/edition_cocktail.phtml';
    }