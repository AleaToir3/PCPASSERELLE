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
    $querycoktail = $connect1-> prepare('SELECT * FROM `Cocktail` JOIN Famille ON Famille.id = Cocktail.idFamille
    WHERE Cocktail.id = :search ');   
    $querycoktail->execute(['search' => $_GET['id']]);
   return  $resCocktail = $querycoktail->fetch(PDO::FETCH_ASSOC);
}

function addCocktail(){
    $connect1 = bipbip();
    $queryaddcok = $connect1->prepare('INSERT INTO Cocktail (nom,description,urlPhoto,dateConception,prixMoyen,idFamille) VALUES (?,?,?,?,?,?)');
    $queryaddcok->execute([
        $_GET['nomForm'],
        $_GET['descriptionForm'],
        $_FILES['urlPhotoForm']['name'],
        $_GET['dateConceptionForm']."-10-10",
        $_GET['PrixMoyForm'],
        $_GET['idFamilleForm']        
    ]);
}

function family(){
    $connect1 = bipbip();
    $queryfamille = $connect1-> prepare('SELECT * FROM `Famille`');   
    $queryfamille->execute();
    return  $resfamily = $queryfamille->fetchAll(PDO::FETCH_ASSOC);
}
