<?php

function connectToDatabase() {

    $dsn      = 'mysql:dbname=classicmodels;host=localhost:8889';
    $password = 'root';
    $user     = 'root';

    $pdo = new PDO($dsn, $user, $password);

    return $pdo;
}