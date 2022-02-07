<?php

function ajouterCocktail($nom, $description, $urlPhoto, $anneeConception, $prixMoyen, $idFamille)
{
    // Connexion à la base de données avec PDO
    $pdo = connexionMySQL();

    // Préparation de la requête SQL d'insertion
    $query = $pdo->prepare('
        INSERT INTO Cocktail
        (
            nom, 
            description, 
            urlPhoto, 
            dateConception, 
            prixMoyen, 
            idFamille
        )
        VALUES
        (
            ?, ?, ?, ?, ?, ?
        )
    ');
    // La colonne id n'est pas spécifiée, la valeur est automatiquement insérée par MySQL

    // Création de la date de conception au format YYYY-MM-DD à partir de l'année spécifiée
    $dateConception = "$anneeConception-01-01";

    // Exécution de la requête SQL INSERT
    $query->execute(
    [
        $nom, 
        $description, 
        $urlPhoto, 
        $dateConception, 
        $prixMoyen, 
        $idFamille
    ]);
    // Le tableau fourni est dans le MÊME ordre que les colonnes de la requête SQL INSERT
}

function lireCocktail($id)
{
    // Connexion à la base de données avec PDO
    $pdo = connexionMySQL();

    // Préparation de la requête SQL de lecture
    $query = $pdo->prepare('
        SELECT
            Cocktail.id, 
            idFamille, 
            nom, 
            nomFamille, 
            description, 
            urlPhoto, 
            YEAR(dateConception) AS anneeConception, 
            prixMoyen
        FROM Cocktail
        INNER JOIN Famille ON Famille.id = Cocktail.idFamille
        WHERE Cocktail.id = ?
    ');

    // Exécution de la requête SQL SELECT
    $query->execute([ $id ]);
    // Même s'il n'y a qu'un paramètre dans la requête, il faut fournir un tableau pour la valeur

    // Renvoie les données sous la forme d'un tableau associatif (clé = nom colonne SQL)
    return $query->fetch(PDO::FETCH_ASSOC);
}

function listerCocktails()
{
    // Connexion à la base de données avec PDO
    $pdo = connexionMySQL();

    // Préparation de la requête SQL de lecture
    $query = $pdo->prepare('
        SELECT
            Cocktail.id, 
            nom, 
            nomFamille, 
            description, 
            urlPhoto, 
            YEAR(dateConception) AS anneeConception, 
            prixMoyen
        FROM Cocktail
        INNER JOIN Famille ON Famille.id = Cocktail.idFamille
    ');

    // Exécution de la requête SQL SELECT
    $query->execute();

    // Renvoie les données sous la forme d'un tableau associatif (clé = nom colonne SQL)
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function listerFamillesCocktails()
{
    // Connexion à la base de données avec PDO
    $pdo = connexionMySQL();

    // Préparation de la requête SQL de lecture
    $query = $pdo->prepare('
        SELECT
            id, 
            nomFamille
        FROM Famille
    ');

    // Exécution de la requête SQL SELECT
    $query->execute();

    // Renvoie les données sous la forme d'un tableau associatif (clé = nom colonne SQL)
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
