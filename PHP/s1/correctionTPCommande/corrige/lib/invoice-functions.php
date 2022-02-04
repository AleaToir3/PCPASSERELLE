<?php

include_once 'database.php';

/*
// Calcul du montant total HT en PHP
function computeTotalAmount($orderDetails) {
    // Au début le montant total HT est à 0
    $totalAmount = 0;

    // Accumulation des montants HT de chaque ligne de la commande
    foreach($orderDetails as $orderDetail) {
        $totalAmount += $orderDetail['totalPrice'];
    }

    // Version boucle for :
    // for($index = 0; $index < count($orderDetails); $index++) {
    //     $totalAmount += $orderDetails[$index]['totalPrice'];
    // }

    return $totalAmount;
}
*/

// Calcul du montant total HT en PHP + SQL
function computeTotalAmount($orderDetails) {
    $pdo = connectToDatabase();

    // Préparation d'une requête SQL avec aggrégation (GROUP BY)
    $query = $pdo->prepare('
        SELECT
            SUM(quantityOrdered * priceEach) AS totalAmount
        FROM orderdetails
        WHERE orderNumber = ?
        GROUP BY orderNumber');

    // Le numéro de commande se trouve dans la requête SQL originale
    $query->execute([ $orderDetails[0]['orderNumber'] ]);

    // Il n'y a qu'un seul résultat : utilisation de fetch()
    $result = $query->fetch(PDO::FETCH_ASSOC);

    return $result['totalAmount'];
}