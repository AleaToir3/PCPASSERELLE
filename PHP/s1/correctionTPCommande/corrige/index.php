<?php

include 'lib/database.php';
include 'lib/debug.php';


$pdo = connectToDatabase();

// A-t'on reçu le formulaire de recherche ?
if(empty($_POST) == false)
{
    // Oui, c'est une requête HTTP POST, recherche de toutes les commandes en fonction d'un nom de client

    // Préparation d'une requête SQL paramétrée au niveau de la clause WHERE
    $query = $pdo->prepare('
        SELECT
            orderNumber, 
            customerName, 
            orderDate, 
            status
        FROM orders
        INNER JOIN customers ON customers.customerNumber = orders.customerNumber
        WHERE customerName LIKE ?
        ORDER BY orderDate DESC
    ');

    // Exécution de la requête
    $query->execute([ '%' . $_POST['customerName'] . '%' ]);
}
else
{
    // Non, c'est une requête HTTP GET, recherche de toutes les commandes

    // Préparation d'une requête SQL paramétrée au niveau de la clause WHERE
    $query = $pdo->prepare('
        SELECT
            orderNumber, 
            customerName, 
            orderDate, 
            status
        FROM orders
        INNER JOIN customers ON customers.customerNumber = orders.customerNumber
        ORDER BY orderDate DESC
    ');

    // Exécution de la requête
    $query->execute();
}


// Il y a plusieurs commandes : utilisation de fetchAll()
$orders = $query->fetchAll(PDO::FETCH_ASSOC);

/*
 * $orders est un tableau à 2 dimensions contenant les résultats de la
 * requête SQL SELECT : 
 * - la première dimension représente les lignes
 * - la deuxième dimension représente les colonnes
 * 
 * Ainsi $orders[2]['customerName'] c'est le nom du troisième client
 */



//debugTable($orders);
include 'templates/index.phtml';