<?php



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

function getAllFamilly(){
    // Connexion à la base de données avec PDO
    $pdo = connexionMySQL();

    // Préparation de la requête SQL de lecture
    $query = $pdo->prepare('
        SELECT id, nomFamille FROM famille
    ');

    // Exécution de la requête SQL SELECT
    $query->execute();

    // Renvoie les données sous la forme d'un tableau associatif (clé = nom colonne SQL)
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function addCocktail($data, $photoUrl){
    $pdo = connexionMySQL();
    $query = $pdo->prepare('
        INSERT INTO `cocktail`(`nom`, `description`, `urlPhoto`, `dateConception`, `prixMoyen`, `idFamille`)
        VALUES
        (?,?,?,?,?,?)
    ');
    $query->execute([$data['nom'], $data['description'], $photoUrl, $data['dateConception'].'-01-01', $data['prixMoyen'], $data['idFamille']]);
}

