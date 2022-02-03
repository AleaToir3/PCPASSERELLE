<?php
 
$user = 'root';
$pass = 'root';
$conection = new PDO('mysql:host=localhost:8889;dbname=classicmodels', $user, $pass);

$query = $conection->prepare('SELECT * FROM Tables');
$query->execute();
$resultEnTableau = $query->fetchAll(PDO::FETCH_ASSOC);//SORT DES TABLEAU
$resultEnObjet = $query->fetchAll(PDO::FETCH_OBJ);//SORT DES OBJET


// echo ' <pre>';
// var_dump($resultEnTableau);
// echo ' </pre>';


echo '<table>';
foreach($resultEnTableau as $valeur){

    echo '<tr>';
    echo '<td> '.$valeur['Table'].' </td>';
    echo '</tr>';
}

// echo '</table>';


// $idCustomer = 1;
// $queryId = $conection->prepare('SELECT * FROM customers WHERE customerNumber = ?');
// $queryId->execute([$idCustomer]);

// $resQueryId = $queryId->fetchAll(PDO::FETCH_ASSOC);
// echo '<table>';
// echo '<td>';


// // foreach($resQueryId as $valeur){
// //     echo '<td>'.$valeur.'</td>';
// // }

// echo '</td>';
// echo '</table>';


?>