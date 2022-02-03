<?php
    //definition de l'affichage du formulaire (true le formulaire est affiché)
    $showForm = true;
    //creation des chaines pour l'affichage des erreurs
    $errorPseudoLenght = "";
    $errorInMail = "";

    //test de l'xistence de chacune des valeurs du formulaire (isset)
    //on test également, meme si elle existent, qu'elles ne sont pas vide (empty)
    if(
        isset($_POST["pseudo"]) && !empty($_POST["pseudo"]) &&
        isset($_POST["nom"]) && !empty($_POST["nom"]) &&
        isset($_POST["prenom"]) && !empty($_POST["prenom"]) &&
        isset($_POST["mdp"]) && !empty($_POST["mdp"]) &&
        isset($_POST["mail"]) && !empty($_POST["mail"]) &&
        isset($_POST["sexe"]) && !empty($_POST["sexe"]) &&
        isset($_POST["address"]) && !empty($_POST["address"]) &&
        isset($_POST["cp"]) && !empty($_POST["cp"]) &&
        isset($_POST["ville"]) && !empty($_POST["ville"])
    ){

        //Verifier la taille du pseudo entre 4 et 14
        $taille_pseudo = strlen($_POST['pseudo']);
        if($taille_pseudo < 4 || $taille_pseudo > 14){
            //si erreur on mets le message dans la variable
            $errorPseudoLenght = "erreur longeur non conforme";
        }

        //verifier le format du mail (que c'est bien un mail)
        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            //si erreur on mets le message dans la variable
            $errorInMail = "L'adresse email ".$_POST['mail']." n'est pas considérée comme valide.";
        }


        //si pas d'erreur on affiche les données dans la page et on ecris les données dans un fichier
        if(empty($errorPseudoLenght) && empty($errorInMail)){

            //ouverture du fichier txt afin d'ecrire dedans
            $fp = fopen('fopen.txt', 'a');
            foreach($_POST as $key => $val){
                //creation de la chaine de caratere qui va etre ecrit
                $chaine = $key . ' : ' . $val."\r\n";
                //file_put_contents('fil_put.txt', $chaine, FILE_APPEND);

                //ecriture de la chaine dans le fichier
                fwrite($fp, $chaine);
            }
            //fermeture du fichier txt
            fclose($fp);
            
            //on passe la varibale a false pour ne pas afficher le formaulaire
            $showForm = false;
            //ajout du message de succes (toujours etre claire avec l'utilisateur).
            echo 'le formulaire est valide';

        }

    }

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
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6">
                <?php
                    //test if pour afficher le formulaire ou non
                    if($showForm){
                ?>
                <form action="#" method="POST" class="form-signin">
                    <div class="form-label-group">
                        <label for="inputEmail">Pseudo</label>    
                        <input type="text" id="pseudo" name="pseudo" class="form-control">  
                        <?php 
                            //verification de la présence d'une données
                            echo (isset($_POST['pseudo']) && empty($_POST['pseudo'])) ? "<span style=\"color:red\">Champ obligatoire</span>" : ""; ?>
                        <?php echo '<span style="color:red">'.$errorPseudoLenght.'</span>'; ?>
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail">Nom</label>    
                        <input type="text" id="nom" name="nom" class="form-control">  
                        <?php
                        echo (isset($_POST['nom']) && empty($_POST['nom'])) ? "<span style=\"color:red\">Champ obligatoire</span>" : ""; ?>
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail">Prénom</label>    
                        <input type="text" id="prenom" name="prenom" class="form-control">  
                        <?php echo (isset($_POST['prenom']) && empty($_POST['prenom'])) ? "<span style=\"color:red\">Champ obligatoire</span>" : ""; ?>
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail">Mot de passe</label>    
                        <input type="password" id="mdp" name="mdp" class="form-control">  
                        <?php echo (isset($_POST['mdp']) && empty($_POST['mdp'])) ? "<span style=\"color:red\">Champ obligatoire</span>" : ""; ?>
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail">Email</label>    
                        <input type="text" id="mail" name="mail" class="form-control">  
                        <?php echo '<span style="color:red">'.$errorInMail.'</span>'; ?>
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail">Sexe</label>    
                        <input type="text" id="sexe" name="sexe" class="form-control">  
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail">Adresse</label>    
                        <input type="text" id="address" name="address" class="form-control">  
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail">Code postal</label>    
                        <input type="number" id="cp" name="cp" class="form-control">  
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail">Ville</label>    
                        <input type="text" id="ville" name="ville" class="form-control">  
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
                <?php }else{
                    echo 'merci pour vos informations.';
                } ?>
            </div>
        </div>
    </div>

</body>
</html>