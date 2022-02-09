<?php

// Ici se trouvent toutes les fonctions manipulant la base de données SQL et implémentant les fonctionnalités.


                    //  REQUETE DE TOUS MES COCK    //
function allCocktail()
{
    $connect1 = bipbip();
    $querycoktails = $connect1-> prepare('SELECT id,nom,description,urlPhoto  FROM Cocktail');   
    $querycoktails->execute();
    return $resCocktails = $querycoktails->fetchAll(PDO::FETCH_ASSOC);
}
                    //   RECHERCHER D  UN COCK  ///
function oneCocktail()
{
    $connect1 = bipbip();
    $querycoktail = $connect1-> prepare('SELECT *, cocktail.id as idCocktail FROM `Cocktail` JOIN Famille ON Famille.id = Cocktail.idFamille
    WHERE Cocktail.id = :search ');   
    $querycoktail->execute(['search' => $_GET['id']]);
   return  $resCocktail = $querycoktail->fetch(PDO::FETCH_ASSOC);
}

function addCocktail(){
    $connect1 = bipbip();
    $queryaddcok = $connect1->prepare('INSERT INTO Cocktail (nom,description,urlPhoto,dateConception,prixMoyen,idFamille) VALUES (?,?,?,?,?,?)');
    $queryaddcok->execute([
        $_POST['nomForm'],
        $_POST['descriptionForm'],
        $_FILES['urlPhotoForm']['name'],
        $_POST['dateConceptionForm']."-10-10",
        $_POST['PrixMoyForm'],
        $_POST['idFamilleForm']        
    ]);
    return $lastid= $connect1->lastInsertId();
}

function removeCocktail($supcok){
$connect1 = bipbip();
$queryRemovecok = $connect1->prepare('DELETE FROM Cocktail WHERE id = ?');
$queryRemovecok->execute([$supcok]);
}

function update_cock() 
{
    $connect1 = bipbip();
    $queryUpdateCock = $connect1-> prepare('UPDATE Cocktail 
    SET nom=:nom,
        description=:description,
        dateConception=:date,
        prixMoyen=:prix,
        idFamille=:famille 
    WHERE id = :id'); 
    $queryUpdateCock->execute([
        'nom'=>$_POST['nomForm'],
        'description'=>$_POST['descriptionForm'],
        'date'=>$_POST['dateConceptionForm'].'-01-01',
        'prix'=>$_POST['PrixMoyForm'],
        'famille'=>$_POST['idFamilleForm'],
        'id' =>$_POST['id']]);
    
}
    
function family(){
    $connect1 = bipbip();
    $queryfamille = $connect1-> prepare('SELECT * FROM `Famille`');   
    $queryfamille->execute();
    return  $resfamily = $queryfamille->fetchAll(PDO::FETCH_ASSOC);
}



function allIngredients(){
    $connect1 = bipbip();
    $queryAllIngredient = $connect1->prepare('SELECT * FROM `Ingredient`');
    $queryAllIngredient->execute(); 
    return $res = $queryAllIngredient->fetchAll(PDO::FETCH_ASSOC);
}

function searchIngredient($ingre){
    $connect1 = bipbip();
    $queryingredient = $connect1->prepare('SELECT Ingredient.nom FROM Cocktail INNER JOIN Cocktail_Ingredient ON Cocktail_Ingredient.idCocktail = Cocktail.id INNER JOIN Ingredient ON Ingredient.id = Cocktail_Ingredient.idIngredient WHERE idCocktail = ?');
    $queryingredient->execute([$ingre]);
    return $res = $queryingredient->fetchAll(PDO::FETCH_ASSOC);
}
 function ingredientsCocktails($listIng){
    $connect1 = bipbip();
    $queryingredient = $connect1->prepare('SELECT * FROM Cocktail_Ingredient WHERE idCocktail = ?');
    $queryingredient->execute([$listIng]);
    return $res = $queryingredient->fetchAll(PDO::FETCH_ASSOC);
 }

function addIngredientInCocktail($idCock,$ingredient){
    $connect1 = bipbip();    
    $queryAddIngredientInCocktail = $connect1->prepare('INSERT INTO Cocktail_Ingredient(idCocktail,idIngredient) VALUES (?,?)');
        $queryAddIngredientInCocktail->execute([
            $idCock,
            $ingredient           
        ]);
    }
