<?php

require 'lib/database.php';
require 'models/cocktail.php';
$onecock = oneCocktail();
$allfamily = family();
$allIngredients = allIngredients();


if(!empty($_POST)){
    $updateCock = update_cock();
    header('Location: backOffice.php');
}
include 'templates/change_cocktail.phtml';

$aaa = ingredientsCocktails($_POST['id']);
var_dump($aaa);

?>