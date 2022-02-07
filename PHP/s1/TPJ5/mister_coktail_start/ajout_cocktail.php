<?php

require 'lib/database.php';
require 'models/cocktail.php';

if(!empty($_POST)){
    var_dump($_FILES);  
    var_dump($_FILES['urlPhotoForm']['name']);
    $addcock =  addCocktail();
    
}
$allfamily = family();
require 'templates/ajout_cocktail.phtml';



?>
