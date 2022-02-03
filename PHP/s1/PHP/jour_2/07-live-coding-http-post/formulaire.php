<!DOCTYPE html>
<html lang="fr">
      <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

            <title>Inscription</title>
      </head>
      <body>

            <div class="container">
                  <div class="row">
                        <div class="col-12 mt-5">
                              <form class="border p-3" method="post" action="">

                                    <div>



<?php 
       //echo '<pre>'; print_r($_POST); echo '</pre>';die();

      // Affichez proprement (avec des echo) les saisies du formulaire.
      /*
      if(isset($_POST['pseudo']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mdp']) && isset($_POST['email']) && isset($_POST['sexe']) && isset($_POST['ville']) && isset($_POST['cp']) && isset($_POST['adresse'])) {

      }
      */
      $pseudo = '';
      $nom = '';
      $prenom = '';
      $email = '';
      $mdp = '';
      $sexe = '';
      $ville = '';
      $cp = '';
      $adresse = '';
      
      if(
            isset($_POST['pseudo']) && 
            isset($_POST['nom']) && 
            isset($_POST['prenom']) && 
            isset($_POST['mdp']) && 
            isset($_POST['email']) && 
            isset($_POST['sexe']) && 
            isset($_POST['ville']) && 
            isset($_POST['cp']) && 
            isset($_POST['adresse'])) {

                  // variable de controle nous permettant de savoir s'il y a eu des erreurs dans nos traitements
                  // on changera la valeur de cette variable uniquemennt dans les cas d'erreur
                  $erreur = false;

                  echo '<ul class="list-group">';
                  foreach($_POST AS $indice => $valeur) {
                        echo '<li  class="list-group-item"><b>' . $indice . ' :</b> ' . $valeur . '</li>';
                  }            
                  echo '</ul><hr>';

                  // trim() permet d'enlever les espaces en début et en fin de chaine.
                  $pseudo = trim($_POST['pseudo']);
                  $nom = trim($_POST['nom']);
                  $prenom = trim($_POST['prenom']);
                  $email = trim($_POST['email']);
                  $mdp = trim($_POST['mdp']);
                  $sexe = trim($_POST['sexe']);
                  $ville = trim($_POST['ville']);
                  $cp = trim($_POST['cp']);
                  $adresse = trim($_POST['adresse']);


                  // Contrôle sur la taille du pseudo, le pseudo doit avoir entre 4 et 14 caractères inclus, en cas d'erreur, on affiche un message.

                  $taille_pseudo = iconv_strlen($pseudo);
                  if($taille_pseudo < 4 || $taille_pseudo > 14) {
                        echo '<div class="alert alert-danger mb-3">Attention, <br>le pseudo doit avoir entre 4 et 14 caractères inclus</div>';
                        // cas d'erreur
                        $erreur = true;
                  }

                  // Contrôle sur la validité du format de l'email
                  // filter_var() permet de valider une information selon un filtre spécifique
                  // https://www.php.net/manual/fr/function.filter-var.php

                  // if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo '<div class="alert alert-danger mb-3">Attention, <br>erreur sur le format du mail</div>';
                        // cas d'erreur
                        $erreur = true;
                  }

                  // s'il n'y a pas d'erreur dans nos controles, on enregistre les informations sur un fichier créé par php sur le serveur.
                  if($erreur == false) {
                        // fopen() avec le mode "a" (deuxième argument) permet d'ouvrir un fichier ou de le créer s'il n'existe pas.
                        $f = fopen('liste.txt', 'a');
                        // var_dump($f);
                        // fwrite() permet d'écrire dans un fichier
                        fwrite($f, $pseudo . ' : ' . $email . "\n");
                        // le \n permet un retour à la ligne dans un fichier. Il doit être entre "" obligatoirement sinon ne sera pas reconnu !!!

                        // on ferme le fichier pour libérer de l'espace mémoire sur le serveur.
                        fclose($f);

                  }           

                  

      } // fin des isset()

?>



                                    </div>


                                    <div class="form-row">
                                          <div class="col-sm-6">
                                                <div class="form-group">
                                                      <label for="pseudo">Pseudo</label>
                                                      <input type="text" name="pseudo" id="pseudo" value="<?php echo $pseudo; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                      <label for="nom">Nom</label>
                                                      <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                      <label for="prenom">Prénom</label>
                                                      <input type="text" name="prenom" id="prenom" value="<?php echo $prenom; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                      <label for="mdp">Mot de passe</label>
                                                      <input type="text" name="mdp" id="mdp" value="" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                      <label for="email">Email</label>
                                                      <input type="text" name="email" id="email" value="<?php echo $email; ?>" class="form-control">
                                                </div>
                                          </div>
                                          <div class="col-sm-6">
                                                <div class="form-group">
                                                      <label for="sexe">Sexe</label>
                                                      <select name="sexe" id="sexe" value="" class="form-control">
                                                            <option value="m">homme</option>
                                                            <option value="f" <?php if($sexe == 'f') echo 'selected'; ?> >femme</option>
                                                      </select>
                                                </div>
                                                <div class="form-group">
                                                      <label for="ville">Ville</label>
                                                      <input type="text" name="ville" id="ville" value="<?php echo $ville; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                      <label for="cp">Code postal</label>
                                                      <input type="text" name="cp" id="cp" value="<?php echo $cp; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                      <label for="adresse">Adresse</label>
                                                      <textarea name="adresse" id="adresse" rows="1" class="form-control"><?php echo $adresse; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                      <label>&nbsp;</label>
                                                      <input type="submit" id="inscription" value="Inscription" class="w-100 btn btn-success">
                                                </div>
                                          </div>
                                    </div>
                              </form>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-12 mt-3 border p-3">




<?php 
      // Affichage des informations enregistrées sur le fichier liste.txt

      // on vérifie l'existence du fichier :
      if(file_exists('liste.txt')) {

            // file() fait tout le travail pour la récupération des données d'un fichier.
            // cette fonction nous renvoie un tableau array contenant chaque ligne du fichier concerné dans un indice du tableau.
            $contenu_fichier = file('liste.txt');
            // echo '<pre>'; print_r($contenu_fichier); echo '</pre>';

            // afficher les informations du tableau array dans une liste ul li

            echo '<ul>';

            foreach($contenu_fichier AS $valeur) {
                  // htmlentites() à l'affichage pour éviter les injection xss
                  echo '<li>' . htmlentities($valeur, ENT_QUOTES) . '</li>';
            }

            echo '</ul>';
            
      }      


?>
                        </div>
                  </div>
            </div>
      </body>
</html>
