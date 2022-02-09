<?php
require 'lib/database.php';
require 'models/cocktail.php';
removeCocktail($_GET['id']);
header('Location:backOffice.php');
?>



