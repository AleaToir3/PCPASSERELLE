<?php
$user = 'root';
$pass = 'root';
$bdd = new PDO('mysql:host=localhost:8889;dbname=classicmodels', $user, $pass);

// $queryAorder = $bdd-> prepare('SELECT * FROM customers 
//                                             JOIN orders on 
//                                                 JOIN orderdetails on 
//                                         WHERE orders.orderNumber = :ordernumb');
// $queryAOrder->execute('ordernum = $_GET[customerName]');
// $resAOrder = $queryAOrder->fetchAll(PDO::FETCH_ASSOC);



// :::::: PROFILE USER ::::::
$queryCustomer = $bdd-> prepare('SELECT customers.customerName,  customers.contactLastName, customers.contactFirstName, customers.addressLine1, customers.city, customers.postalCode, customers.country
                               FROM customers  
                                JOIN orders on orders.customerNumber = customers.customerNumber
                               WHERE orders.orderNumber = :ancOrderNumber');

// $queryAorder = $bdd-> prepare('SELECT customers.customerName,  customers.contactLastName, customers.contactFirstName, customers.addressLine1, customers.city, customers.postalCode, customers.country
//                                 FROM customers  
//                                     JOIN orders on orders.customerNumber = customers.customerNumber
//                                         JOIN orderdetails on orders.orderNumber = orderdetails.orderNumber
//                                         WHERE orders.orderNumber = :ancOrderNumber');
$queryCustomer->execute(['ancOrderNumber' => $_GET['orderNumber']]);
$resCustomer = $queryCustomer->fetch(PDO::FETCH_ASSOC);


 


include 'templates/invoice.phtml';

?>