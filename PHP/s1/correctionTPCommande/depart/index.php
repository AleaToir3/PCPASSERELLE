<?php

    $connection = new PDO('mysql:dbname=classicmodels;host=localhost:3306', 'root', '');

    if(isset($_POST['customerName']) && !empty($_POST['customerName'])){
        
        $query = $connection->prepare('
            SELECT *
            FROM orders
                INNER JOIN customers ON customers.customerNumber = orders.customerNumber
            WHERE customerName LIKE :search
        ');
        $query->execute([
            'search' => '%'.$_POST['customerName'].'%'
        ]);

    }else{
        
        $query = $connection->prepare('
            SELECT *
            FROM orders
                INNER JOIN customers ON customers.customerNumber = orders.customerNumber
        ');
        $query->execute();
        
    }

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    //debugTable($orders);
    include 'templates/index.phtml';