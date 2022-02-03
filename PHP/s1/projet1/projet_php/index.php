<?php
$user = 'root';
$pass = 'root';
$bdd = new PDO('mysql:host=localhost:8889;dbname=classicmodels', $user, $pass);







$queryAllOrder = $bdd-> prepare('SELECT orderNumber,customers.customerName,orderDate,status FROM orders JOIN customers ON customers.customerNumber=orders.customerNumber');
$queryAllOrder->execute();
$resAllOrder = $queryAllOrder->fetchAll(PDO::FETCH_ASSOC);
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