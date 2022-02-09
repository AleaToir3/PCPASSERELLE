<?php

require 'lib/database.php';
require 'models/cocktail.php';

if(!empty($_POST)){
    $addcock =  addCocktail();
 // header('Location: index.php');
}
$allfamily = family();
$allIngredients = allIngredients();
require 'templates/ajout_cocktail.phtml';

$ingredients  =  $_POST['ingredients'];
 foreach($ingredients as $ingredient){
     addIngredientInCocktail($addcock,$ingredient);}
?>
