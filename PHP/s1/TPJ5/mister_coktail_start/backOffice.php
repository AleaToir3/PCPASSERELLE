<?php
require 'lib/database.php';
require 'models/cocktail.php';
$allCocktails = allCocktail();
require 'templates/backOffice.phtml';

?>