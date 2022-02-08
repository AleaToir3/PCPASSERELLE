<?php

    require_once 'lib/database.php';
    require_once 'models/cocktail.php';

    supprimer($_GET['id']);

    header('Location:back_office.php');