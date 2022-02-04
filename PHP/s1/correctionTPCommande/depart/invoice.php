<?php

    $orderNumber = $_GET['id'];

    $connection = new PDO('mysql:dbname=classicmodels;host=localhost:3306', 'root', '');

    $query = $connection->prepare('
        SELECT * 
        FROM orders
            INNER JOIN customers ON customers.customerNumber = orders.customerNumber
        WHERE orders.orderNumber = :id
    ');
    $query->execute(['id' => $orderNumber]);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    $query2 = $connection->prepare('
        SELECT *
        FROM orderdetails
            INNER JOIN products ON products.productCode = orderdetails.productCode
        WHERE orderdetails.orderNumber = :id
    ');
    $query2->execute(['id' => $orderNumber]);
    $productLineResult = $query2->fetchAll(PDO::FETCH_ASSOC);

    include 'templates/invoice.phtml';