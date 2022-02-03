<?php
/*
pseudo
nom
prenom
mdp
email
sexe
adresse
cp
ville
*/

//Verifier la taille du pseudo entre 4 et 14
//verifier le format du mail (que c'est bien un mail)
//si pas d'erreur on affiche les données dans la page et on ecris les données dans un fichier

$tabForm = [
    array('name' => 'pseudo', 'label' => 'Pseudo', 'type' => 'text'),
    array('name' => 'nom', 'label' => 'Nom', 'type' => 'text'),
    array('name' => 'prenom', 'label' => 'Prenom', 'type' => 'text'),
    array('name' => 'mdp', 'label' => 'Mot de passe', 'type' => 'password'),
    array('name' => 'email', 'label' => 'Email', 'type' => 'email'),
    array('name' => 'sexe', 'label' => 'Sexe', 'type' => 'text'),
    array('name' => 'adresse', 'label' => 'Adresse', 'type' => 'text'),
    array('name' => 'cp', 'label' => 'Code postal', 'type' => 'text'),
    array('name' => 'ville', 'label' => 'Ville', 'type' => 'text')
];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form action="" method="GET">

    <?php 
    foreach($tabForm as  $tab){
     echo'  <input type="'.$tab['type'].'" name="'.$tab['name'].'" label="'.$tab['label'].'" placeholder="'.$tab['name'].'"> <br>';
    }
    $ppp = fopen('exemple.txt', 'a'); 
    fwrite($ppp,'mais nan \r\n')  ;
     ?>
    <input type="submit" value="Valider">
</form>


</body>
</html>