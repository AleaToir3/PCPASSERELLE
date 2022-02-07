<?php
    require_once 'lib/database.php';
    require_once 'models/cocktail.php';

    $tabAutoryse = ['image/jpeg', 'image/png', 'image/gif'];

    if(isset($_POST) && !empty($_POST)){
        //Ajout de l'image ($_FILES)
        //1 - verifier la présence d'un fichier dans le temp
        $photoUrl = "";
        if(isset($_FILES) && !empty($_FILES)){
            $name = $_FILES['urlPhoto']['name'];
            $type = $_FILES['urlPhoto']['type'];
            $tmp_name = $_FILES['urlPhoto']['tmp_name'];
            $error = $_FILES['urlPhoto']['error'];
            $size = $_FILES['urlPhoto']['size'];

            //2 - verifier qu'il n'y a pas d'erreur de transfert
            if($error == 0){
                //verification de la taille du fichier
                if($size < 2097152){
                    //3 - vérfier le type de fichier (type mime)
                    if(in_array($type, $tabAutoryse)){
                        // Si 1, 2 et 3 se sont bien passés alors j'upload la photo sur le serveur
                        move_uploaded_file($tmp_name, __DIR__.'/www/images/cocktails/'.$name);
                        $photoUrl = $name;
                    }else{
                        die('le fichier n\'est pas un jpg');
                    }

                }else{
                    die('fichier trop volumineux');
                }
            }else{
                die('erreur lors de l envoi du fichier');
            }
        }

        addCocktail($_POST, $photoUrl);

        header("Location:index.php");

    }else{
        $listFamille = getAllFamilly();
        include 'templates/ajout_cocktail.phtml';
    }
