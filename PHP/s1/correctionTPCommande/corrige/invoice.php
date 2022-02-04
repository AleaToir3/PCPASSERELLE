<?php

include 'lib/database.php';
include 'lib/debug.php';
include 'lib/invoice-functions.php';


$pdo = connectToDatabase();



// -------------------------- PREMIERE PARTIE ---------------------------

// Préparation d'une requête SQL paramétrée au niveau de la clause WHERE
$query = $pdo->prepare('
    SELECT
        customerName, 
        contactFirstName, 
        contactLastName, 
        addressLine1, 
        addressLine2, 
        postalCode, 
        city, 
        country
    FROM customers
    INNER JOIN orders ON customers.customerNumber = orders.customerNumber
    WHERE orderNumber = ?'
);

/*
 * Exécution de la requête paramétrée : la valeur du paramètre vient de
 * la query string (qu'on récupère via $_GET)
 */
$query->execute([ $_GET['orderNumber'] ]);

// Il n'y a qu'un seul client par commande : utilisation de fetch()
$customer = $query->fetch(PDO::FETCH_ASSOC);

/*
 * $customer est un tableau associatif, les clés sont les noms des
 * colonnes de la requête SQL SELECT
 */


// -------------------------- DEUXIEME PARTIE ---------------------------


// Préparation d'une requête SQL paramétrée au niveau de la clause WHERE
$query = $pdo->prepare('
    SELECT
        orderNumber, 
        productName, 
        quantityOrdered, 
        priceEach, 
        (quantityOrdered * priceEach) AS totalPrice
    FROM orderDetails
    INNER JOIN products ON products.productCode = orderDetails.productCode
    WHERE orderNumber = ?'
);

/*
 * Exécution de la requête paramétrée : la valeur du paramètre vient de
 * la query string (qu'on récupère via $_GET)
 */
$query->execute([ $_GET['orderNumber'] ]);

$orderDetails = $query->fetchAll(PDO::FETCH_ASSOC);



//debugTable($customer);
include 'templates/invoice.phtml';